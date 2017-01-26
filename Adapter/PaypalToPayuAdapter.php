<?php
namespace Adapter;

require_once 'Ipayu.php';

use Adapter;

Class PaypalToPayuAdapter implements Adapter\Ipayu
{
    private $payObj;
    
    public function __construct($payObj) {
        $this->payObj = $payObj;
    }

    public function addItem($itemName = NULL) {
        $this->payObj->addOneItem($itemName);
    }
    
    public function addPrice($itemPrice = NULL){
        $this->payObj->addPriceToTotal($itemPrice);
    }
}

