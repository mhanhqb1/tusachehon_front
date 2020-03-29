<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Routing\Router;
use App\Lib\Api;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /** @var object $controller Controller name. */
    public $controller = null;

    /** @var object $action Action name. */
    public $action = null;
    public $session = null;
    public $current_url = '';
    public $BASE_URL = '';
    public $_settings = array();

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
//        $this->loadComponent('Security');
//        $this->loadComponent('Csrf');
    }

    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        // Redirect https
        if (Configure::read('Config.HTTPS') === true) {
            // ロードバランサへHTTPSでアクセスされた場合
            if (isset($_SERVER['HTTP_X_FORWARDED_PORT']) && 443 == $_SERVER['HTTP_X_FORWARDED_PORT']) {
                // ベースURLをHTTPSに書き直す
                Router::fullbaseUrl('https://' . $_SERVER['HTTP_HOST']);
            }
            if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "http") {
                return $this->redirect('https://' . env('SERVER_NAME') . $this->here);
            } elseif (!isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 80) {
                return $this->redirect('https://' . env('SERVER_NAME') . $this->here);
            }
        }
        parent::beforeFilter($event);

        // Start session
        if (empty($this->request->session()->id())) {
            $this->request->session()->start();
        }

        $this->session = $this->request->session();
        $this->controller = strtolower($this->request->params['controller']);
        $this->action = strtolower($this->request->params['action']);
        $this->current_url = Router::url($this->here, true);
        $this->BASE_URL = Router::fullBaseUrl();
        $this->_settings = $this->getSettings();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event) {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        $cart = array();
        $sessionKey = Configure::read('Config.cartSessionKey');
        if ($this->session->check($sessionKey)) {
            $cart = $this->session->read($sessionKey);
        }

        // Set common param
        $this->set('cart', $cart);
        $this->set('session', $this->session);
        $this->set('cookie', $this->Cookie);
        $this->set('controller', $this->controller);
        $this->set('action', $this->action);
        $this->set('current_url', $this->current_url);
        $this->set('BASE_URL', $this->BASE_URL);
        $this->set('isMobile', $this->isMobile());

        // Set common data
        $this->set('_settings', $this->_settings);
        $this->set('productCates', $this->getProductCates());

        // Set default layout
        $this->setLayout();
    }

    /**
     * Common function set layout for view.
     */
    public function setLayout() {
        if ($this->controller == 'ajax') {
            $this->viewBuilder()->layout('ajax');
        } elseif ($this->controller == 'cart' && in_array($this->action, array('checkout', 'complete'))) {
            $this->viewBuilder()->layout('checkout');
        } else {
            $this->viewBuilder()->layout('lyona');
        }
    }

    public function isMobile() {
        return $this->RequestHandler->isMobile();
    }

    // Get list cates
    public function getSettings() {
        $data = array();
        $data = Api::call(Configure::read('API.url_settings_general'), array());
        return $data;
    }

    // Get product cates
    public function getProductCates() {
        $productCates = array();
        $_tmpPC = !empty($this->_settings['product_cates']) ? $this->_settings['product_cates'] : array();
        if (!empty($_tmpPC)) {
            foreach ($_tmpPC as $pc) {
                if (empty($pc['parent_id'])) {
                    $productCates[$pc['id']]['data'] = $pc;
                } else {
                    $productCates[$pc['parent_id']]['child_data'][$pc['id']] = $pc;
                }
            }
        }
        return $productCates;
    }

    /**
     * Commont function to get params of actions in controller.
     * 
     * @param array $default List parameter name. Default is array().
     * @return array
     */
    public function getParams($default = array()) {
        $params = $this->request->getQuery();
        if (!empty($default)) {
            foreach ($default as $paramName => $paramValue) {
                if (!isset($params[$paramName])) {
                    $params[$paramName] = $paramValue;
                }
            }
        }
        return $params;
    }

    /**
     * Cart format
     */
    public function formatCart($cart) {
        $total = 0;
        $totalPrice = 0;
        $productHtml = "";
        foreach ($cart as $k => $v) {
            if (in_array($k, array('html', 'total'))) {
                continue;
            }
            if (!empty($v['name'])) {
                $total += $v['qty'];
                $totalPrice += $v['price'] * $v['qty'];
                $_price = number_format($v['price']);
                $_link = $this->BASE_URL . '/san-pham/' . $v['url'];
                $productHtml .= "<li class='product-info' data-id='{$v['id']}'>
                    <div class='p-left'>
                        <a href='{$_link}'>
                            <img class='img-responsive' src='{$v['image']}' alt='{$v['name']}'>
                        </a>
                    </div>
                    <div class='p-right'>
                        <p class='p-name'>{$v['name']}</p>
                        <p class='p-rice'>{$_price}đ</p>
                        <p>Số lượng: {$v['qty']}</p>
                    </div>
                </li>";
            }
        }
        $cart['total'] = $total;
        $html = "<div class='cart-block-content'>
            <h5 class='cart-title'>Bạn hiện có {$total} sản phẩm</h5>
            <div class='cart-block-list'>
                <ul>
                    {$productHtml}
                </ul>
            </div>
            <div class='toal-cart'>
                <span>Tổng tiền</span>
                <span class='toal-price pull-right'>" . number_format($totalPrice) . "₫</span>
            </div>
            <div class='cart-buttons'>
                <a href='" . $this->BASE_URL . '/thanh-toan' . "' class='btn-check-out'>Thanh toán</a>
            </div>
        </div>";
        $cart['html'] = $html;
        return $cart;
    }

}
