<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Lib\Api;
use Cake\Core\Configure;

class AboutController extends AppController {

    public function index() {
        $data = array();
        $data = Api::call(Configure::read('API.url_pages_detail'), array('type' => 'about'));
        $this->set('data', $data);
    }
}
