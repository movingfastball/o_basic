<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
}catch (Exception $e){
    print "Coudn't connect to databases:".$e->getMessage();
    exit();
}

$fh = fopen('dishes.txt','wb');

$q = $db->query("SELECT dish_name,price FROM dishes");

while($row = $q->fetch()){
    fwrite($fh,"The price of $row[0] is $row[1] <br>");
}

fclose($fh);