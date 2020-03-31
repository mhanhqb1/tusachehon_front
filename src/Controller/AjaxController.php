<?php

/* 
 * Ajax controller
 */

namespace App\Controller;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
//        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function productdetail() {
        include ('Bus/Ajax/productdetail.php');
    }
    
    /**
     * Add to cart
     */
    public function addtocart() {
        $this->autoRender = false;
        include ('Bus/Ajax/addtocart.php');
    }
    
    /**
     * Update cart
     */
    public function updatecart() {
        include ('Bus/Ajax/updatecart.php');
    }
}