<?php

/* 
 * Products page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class SearchController extends AppController {
    /**
     * List products
     */
    public function index() {
        $limit = 16;
        $param = $this->getParams(array(
            'limit' => $limit,
            'disable' => 0,
            'get_discount_products' => 1
        ));
        $name = !empty($param['name']) ? $param['name'] : '';
        $pageTitle = 'Tìm kiếm';
        $cateName = "Tìm kiếm từ khoá: <strong>{$name}</strong>";
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
}