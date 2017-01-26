<?php
require_once 'Laptop.php';
Class Lcd implements Laptop
{
    public function cost() {
        return 50;
    }
    
    public function description() {
        return 'Lcd display';
    }
}

