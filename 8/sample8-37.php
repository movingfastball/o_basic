<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$cheapest_dish_info = $db->query('SELECT dish_name,price FROM dishes ORDER BY price LIMIT 1')->fetch();

print "$cheapest_dish_info[0],$cheapest_dish_info[1]";