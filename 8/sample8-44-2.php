<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
$q = $db->query('SELECT dish_name ,price FROM dishes');
while($row = $q->fetch()){
   print implode(',',$row)."<br>"; 
}


print "---------------------------------<br>";

$anotherQuery = $db->query('SELECT dish_name,price FROM dishes WHERE price < 5');

$moreDishes = $anotherQuery->fetchAll(); 
