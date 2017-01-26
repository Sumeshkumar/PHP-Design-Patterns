<?php
use Adapter;

Class Customer
{
    protected $pay;
    
    public function __construct($pay) {
        $this->pay = $pay;
    }
    
    public function buy($itemName = NULL, $itemPrice = NULL){
        $this->pay->addItem($itemName);
        $this->pay->addPrice($itemPrice);
    }
}
