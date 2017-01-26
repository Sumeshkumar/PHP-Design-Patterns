<?php
require_once 'Laptop.php';
abstract class LaptopFeature implements Laptop
{
    protected $laptop;
    
    public function __construct(Laptop $laptop) {
        $this->laptop = $laptop;
    }
    
    abstract function cost();
    
    abstract function description();
}
