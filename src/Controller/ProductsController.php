<?php

/* 
 * Products page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ProductsController extends AppController {
    /**
     * List products
     */
    public function index($url = '') {
        $ids = array();
        $rootId = '';
        $cateName = '';
        $limit = 16;
        $cates = !empty($this->_settings['product_cates']) ? $this->_settings['product_cates'] : array();
        foreach ($cates as $c) {
            if ($c['url'] == $url) {
                $ids[] = $c['id'];
                $rootId = $c['id'];
                $cateName = $c['name'];
            }
            if (!empty($rootId) && $c['parent_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = $this->getParams(array(
            'cate_id' => implode(',', $ids),
            'limit' => $limit,
            'disable' => 0,
            'get_discount_products' => 1
        ));
        $pageTitle = $cateName;
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        $total = !empty($result['total']) ? $result['total'] : 0;
        $data = !empty($result['data']) ? $result['data'] : array();
        $discountProducts = !empty($result['discount_products']) ? $result['discount_products'] : array();
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle',
            'discountProducts'
        ));
    }
    
    /**
     * Product detail
     */
    public function detail($url = '') {
        $data = array();
        $pageImage = '';
        $pageTitle = '';
        $pageDescription = '';
        $pageKeyword = '';

        if (!empty($url)) {
            $data = Api::call(Configure::read('API.url_products_detail'), array(
                'url' => $url,
                'get_discount_products' => 1,
                'get_related_products' => 1
            ));
            $pageImage = !empty($data['image']) ? $data['image'] : '';
            $pageTitle = !empty($data['name']) ? $data['name'] : '';
            $pageDescription = !empty($data['seo_description']) ? $data['seo_description'] : '';
            $pageKeyword = !empty($data['seo_keyword']) ? $data['seo_keyword'] : '';
        }
        $this->set(compact(
            'data',
            'pageImage',
            'pageTitle',
            'pageDescription',
            'pageKeyword'
        ));
    }
}