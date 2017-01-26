<?php
require_once 'ICouponGenerator.php';
Class VolvoCouponGenerator implements ICouponGenerator
{
    private $discount = 0;
    private $isSeason = true;
    private $isBigStock = false;
    
    public function addSeasonDiscount() {
        if($this->isSeason == true){
            $this->discount += 5;
        }else{
            $this->discount += 0;
        }
        
        return $this->discount;
    }
    
    public function addStockDiscount() {
        if($this->isBigStock == true){
            $this->discount += 7;
        }else{
            $this->discount += 0;
        }
        
        return $this->discount;
    }
}
