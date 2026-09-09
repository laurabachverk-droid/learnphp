<?php

class Box {
    public int $width;
    public int $height;
    public  $length;
    public  $isOpen = false;
    public  $hasbeenOpened = false;
    
    public function  open () {
        $this->isOpen = true;
        $this->hasbeenOpened = true;    
    $this->width = $width;
    }

    public function close() {
        $this->isOpen = false;
    }

    public function Volume() {
        return $this->width * $this->height * $this->length;
    }
}


CLASS MetalBox extends Box {
    public $weight;

    public function mass() {
        return parent::Volume() * $this->weight;

    }
}

$metal1 = new MetalBox();
var_dump($metal1->width);
var_dump($metal1);