<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
}catch (Exception $e){
    print "Coudn't connect to databases:".$e->getMessage();
    exit();
}

$fh = fopen('dishes.csv','rb');
$stmt = $db->prepare('INSERT INTO dishes (dish_name,price,is_spicy)VALUES(?,?,?)');

while((! feof($fh)) && ($info = fgetcsv($fh))){
    $stmt->execute($info);
    print "Inserted $info[0]<br>";
}

fclose($fh);