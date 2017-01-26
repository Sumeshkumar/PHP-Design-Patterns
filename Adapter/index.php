<?php
require_once 'PayWithPayu.php';
require_once 'Customer.php';
require_once 'PayWithPaypal.php';
require_once 'PaypalToPayuAdapter.php';

/*
$pay = new PayWithPayu;
$customer = new Customer($pay);
$customer->buy('Laptop', '20000');
*/

$paypal = new Adapter\PayWithPaypal();
$paypalAdapter = new Adapter\PaypalToPayuAdapter($paypal);
$customer = new Customer($paypalAdapter);
$customer->buy('IPhone', '45000');