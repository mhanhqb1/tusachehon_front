<?php
use App\Lib\Api;
use Cake\Core\Configure;

$param = $this->request->data();
$data = Api::call(Configure::read('API.url_products_detail'), $param);
$this->set('data', $data);
