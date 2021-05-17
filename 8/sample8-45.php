<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);

$stmt = $db->prepare('SELECT dish_name, price FROM dishes WHERE dish_name LIKE ?');

$POST['dish_search'] = '%Seed%';

$stmt->execute(array($POST['dish_search']));

while($row = $stmt->fetch()){
    print implode(',',$row)."<br>"; 
 }