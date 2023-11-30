<?php

$arr = [];
$arr[-10] = 'a';
$arr[] = 'b';
$arr[] = 'c';
var_dump($arr); // [-10 => "a", -9 => "b", -8 => "c"]
