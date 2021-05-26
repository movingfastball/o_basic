<?php
function add($a,$b){
    $a = 100;
    global $b;
    $b = 200;
    var_dump($a);
    var_dump($b);
    //print 'local_$a =>'.$a.',local_$a =>'.$b;
    //print",";
}

$a=10;
$b=20;
add($a,$b);

var_dump($a);
var_dump($b);