<?php
require_once 'CouponObjGenerator.php';
require_once 'CouponGenerator.php';

$type = 'Audi';
$carObj = CouponObjGenerator::CreateCoupon($type);
$couponGenerator = new CouponGenerator($carObj);
$discount = $couponGenerator->getCoupons();
echo $discount. " ". $type. ' Car';

echo '<br />';

$type = 'Volvo';
$carObj = CouponObjGenerator::CreateCoupon($type);
$couponGenerator = new CouponGenerator($carObj);
$discount = $couponGenerator->getCoupons();
echo $discount. " ". $type. ' Car';

