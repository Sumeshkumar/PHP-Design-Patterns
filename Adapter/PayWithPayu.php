<?php
namespace Adapter;

require_once 'Ipayu.php';

use Adapter;

class PayWithPayu implements Adapter\Ipayu
{
    public function addItem($itemName = null)
    {
        echo $itemName. ' added';
    }
    
    public function addPrice($itemPice = null)
    {
        echo $itemPice. ' added to total';
    }
}
