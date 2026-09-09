<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasbeenOpened = false;
    
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

$box1 = new Box();
$box1->width = 10;
$box1->height = 5;
$box1->length = 8;
$box1->open();
var_dump($box1);
var_dump($box1->Volume());

$box2 = new Box();
$box2->width = 10;
$box2->height = 7;
$box2->length = 5;
$box2->open();
var_dump($box2);
var_dump($box2->Volume());
var_dump($box1);
