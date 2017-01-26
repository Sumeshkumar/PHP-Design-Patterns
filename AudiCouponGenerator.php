<?php
require_once 'ICouponGenerator.php';
Class AudiCouponGenerator implements ICouponGenerator
{
    private $discount = 0;
    private $isSeason = true;
    private $isBigStock = true;
    
    public function addSeasonDiscount() {
        if($this->isSeason == true){
            $this->discount += 6;
        }else{
            $this->discount += 0;
        }
        
        return $this->discount;
    }
    
    public function addStockDiscount() {
        if($this->isBigStock == true){
            $this->discount += 4;
        }else{
            $this->discount += 0;
        }
        
        return $this->discount;
    }
}
