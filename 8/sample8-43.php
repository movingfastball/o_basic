<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$q = $db->query('SELECT dish_name ,price FROM dishes');
while($row = $q->fetch(PDO::FETCH_NUM)){
   print implode(',',$row)."<br>"; 
}



$q = $db->query('SELECT dish_name ,price FROM dishes');
while($row = $q->fetch(PDO::FETCH_OBJ)){
   "{$row->dish_name} has price {$row->price}<br>"; 
}