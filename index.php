<?php
function hello(): void {
    var_dump('Hello');
    }
 
$hi  =hello();
var_dump($hi);
hello();
hello();
 
function helloName($name='Nameless') {
    var_dump("Hello, $name!");
}
 
helloName('Laura');
helloName('Lori');
 
function helloNameAndAge($name, $age) {
    var_dump("Hello, $name! Youa are $age years old");
}
 
helloNameAndAge('Laura', 18);
helloNameAndAge('Lori', 20);
 
helloName();

$test= function() {

};

 var_dump($test);

$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function ($n) {
   return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);

function cube(int $a): int|string {
    if ($a < 0) {
        return 'no negative!';
    } 
    return $a * $a * $a;
    var_dump('lalalal');
}

var_dump(cube(4));

$answer = cube(llalal);
$text = "cube of 5 is $answer!";
echo $text;

