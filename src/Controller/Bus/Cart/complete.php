<?php
use Cake\Core\Configure;
use App\Lib\Api;

$session = $session = $this->request->session();
$cart = array();

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
if (empty($cart)) {
    return $this->redirect($this->BASE_URL);
}

$data = $this->request->data();
$productData = array();
$totalPrice = 0;
$data['total_qty'] = $cart['total'];
unset($cart['total']);
unset($cart['html']);
foreach ($cart as $v) {
    $productData[] = $v;
    $totalPrice += $v['price']*$v['qty'];
}
$data['total_price'] = $totalPrice;
$data['detail'] = json_encode($productData);
$result = Api::call(Configure::read('API.url_orders_addupdate'), $data);
$error = Api::getError();
if (!empty($error) && empty($result)) {
    echo 'Lỗi';
    die();
} else {
    $this->set('order', $cart);
    $this->set('totalPrice', $totalPrice);
    $session->delete($sessionKey);
}