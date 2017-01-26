<?php
require_once 'VolvoCouponGenerator.php';
require_once 'AudiCouponGenerator.php';

Class CouponObjGenerator
{
    public static function CreateCoupon($type = NULL){
        if($type == 'Volvo'){
            return new VolvoCouponGenerator;
        }else if($type == 'Audi'){
            return new AudiCouponGenerator;
        }
    }
}

