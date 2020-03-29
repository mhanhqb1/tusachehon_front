<?php

use Cake\Core\Configure;

// Valdate and update
if ($this->request->is('post')) {
    // Init
    $session = $this->request->session();
    $cart = array();
    $data = $this->request->data();
    $sessionKey = Configure::read('Config.cartSessionKey');
    
    // Get cart data
    if ($session->check($sessionKey)) {
        $cart = $session->read($sessionKey);
    }
    
    foreach ($cart as $k => &$v) {
        if (in_array($k, array('html', 'total'))) {
            continue;
        }
        if (!empty($data['updates'][$k])) {
            $v['qty'] = $data['updates'][$k];
        }
    }
    
    $cart = $this->formatCart($cart);
    $session->write($sessionKey, $cart);
}