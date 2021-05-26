<?php

$page = file_get_contents('sample9-1.html');

$page = str_replace('{page_title}','Welcome',$page);


if(date('H') >= 12) {
    $page = str_replace('{color}','blue',$page);
} else {
    $page = str_replace('{color}','green',$page);
}

$_SESSION['username'] = 'test';

$page = str_replace('{name}',$_SESSION['username'],$page);

file_put_contents('sample9-3-2.php',$page);