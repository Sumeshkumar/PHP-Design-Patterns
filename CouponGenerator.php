<?php
Class CouponGenerator
{
    private $coupon;
    
    public function __construct(ICouponGenerator $coupon) {
        $this->coupon = $coupon;
    }
    
    public function getCoupons(){
        $discount = $this->coupon->addSeasonDiscount();
        $discount = $this->coupon->addStockDiscount();
        return "Get {$discount}% off the price of your new";
    }
}

