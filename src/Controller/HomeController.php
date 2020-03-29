<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class HomeController extends AppController {
    /**
     * People top page
     */
    public function index() {
        $data = array();
        $data = Api::call(Configure::read('API.url_settings_gethomedata'), array());
        $this->set('data', $data);
//        echo '<pre>';
//        print_r($data);
//        die();
    }
}