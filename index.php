<?php

class  Cat{
    use MakeSound;
}

class Dog {
    use HasSmell, MakeSound;

}

trait HasSmell {
    public $smell;
    public function smell() {
        return 'Smells like ' . $this->smell;
    }
}

trait HasSmell {
    public $smell;
    public function notes() {
        return 'Smells like ' . $this->sound. ' sound';
    }
}