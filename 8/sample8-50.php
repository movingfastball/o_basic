<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
$POST['dish_search'] = '%Seed%';
$dish = $db->quote($POST['dish_search']);
$dish = strtr($dish,array('_'=>'\_','%'=>'\%'));

$stmt = $db->query('SELECT dish_name, price FROM dishes WHERE dish_name LIKE $dish');


