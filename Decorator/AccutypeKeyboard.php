<?php
require_once 'LaptopFeature.php';
Class AccutupeKeyboad extends LaptopFeature
{
    public function cost() {
        return $this->laptop->cost() + 10;
    }
    
    public function description() {
        return $this->laptop->description(). ', Accutype keyboards';
    }
}

