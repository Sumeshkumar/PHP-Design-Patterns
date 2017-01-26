<?php
namespace Adapter;

class PayWithPaypal
{
    public function addOneItem($itemName = NULL){
        echo $itemName. ' added';
    }
    
    public function addPriceToTotal($itemPrice = NULL){
        echo $itemPrice. ' added to total';
    }
}

