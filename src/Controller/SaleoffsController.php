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
        $limit = 18;
        $param = $this->getParams(array(
            'limit' => $limit,
            'disable' => 0,
            'is_sale_off' => 1,
            'sort' => 'discount_price-desc'
        ));
        $pageTitle = $cateName = 'Khuyến mãi';
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        $total = !empty($result['total']) ? $result['total'] : 0;
        $data = !empty($result['data']) ? $result['data'] : array();
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle'
        ));
    }
}