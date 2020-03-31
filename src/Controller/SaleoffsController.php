<?php

/* 
 * Products page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class SaleoffsController extends AppController {
    /**
     * List products
     */
    public function index() {
        $limit = 16;
        $param = $this->getParams(array(
            'limit' => $limit,
            'disable' => 0,
            'is_discount' => 1,
            'sort' => 'discount_price-desc',
            'get_new_products' => 1
        ));
        $pageTitle = $cateName = 'Khuyến mãi';
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        $total = !empty($result['total']) ? $result['total'] : 0;
        $data = !empty($result['data']) ? $result['data'] : array();
        $newProducts = !empty($result['new_products']) ? $result['new_products'] : array();
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle',
            'newProducts'
        ));
    }
}