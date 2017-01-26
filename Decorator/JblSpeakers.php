<?php
require_once 'Laptop.php';
Class JblSpeakers extends LaptopFeature
{
    public function cost(){
        return $this->laptop->cost() + 10;
    }
    
    public function description() {
        return $this->laptop->description(). ', JBL Speakers';
    }
}

