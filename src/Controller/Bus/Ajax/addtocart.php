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
$qty = !empty($cart[$id]['qty']) ? $cart[$id]['qty'] + $data['qty'] : $data['qty'];
if (!empty($cart[$id])) {
    $cart[$data['product_id']]['qty'] = $qty;
} else {
    $product = Api::call(Configure::read('API.url_products_detail'), array('id' => $id));
    $cart[$id] = array(
        'id' => $id,
        'url' => !empty($product['url']) ? $product['url'] : '',
        'image' => !empty($product['image']) ? $product['image'] : '',
        'name' => !empty($product['name']) ? $product['name'] : '',
        'price' => !empty($product['discount_price']) ? $product['price'] - $product['discount_price'] : $product['price'],
        'qty' => $qty
    );
}
$cart = $this->formatCart($cart);
$session->write($sessionKey, $cart);
$cart[$id]['qty'] = $data['qty'];
$result = array(
    'total' => $cart['total'],
    'data' => $cart[$id],
    'html' => $cart['html']
);
echo json_encode($result);
exit();
