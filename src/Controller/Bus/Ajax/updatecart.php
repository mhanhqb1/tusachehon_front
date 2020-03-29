<?php

use App\Lib\Api;
use Cake\Core\Configure;

$session = $this->request->session();
$cart = array();
$data = $this->request->getData();

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
$id = $data['product_id'];
if (!empty($data['qty'])) {
    $cart[$id]['qty'] = $data['qty'];
} else {
    unset($cart[$id]);
}
$cart = $this->formatCart($cart);
$session->write($sessionKey, $cart);
