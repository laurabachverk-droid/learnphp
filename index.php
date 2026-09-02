<?php
$test = 10;
$test = 3.1;
$test = "Hello World";
$test = "õpilane";
$test = "👻";
$test = "🦖";
$test = true;
$test = FALSE;
$test = null;
$lol;
var_dump($test);
var_dump($lol);
$test = [1,2, "three", true ];
var_dump($test);
$test = new stdClass();
$test->name = "John";
var_dump($test);

$num1 = 1000000000000; //
$num2 = "1000000000000"; 
var_dump($num1 === $num2);
