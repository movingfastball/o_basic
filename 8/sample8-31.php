<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$q = $db->query('SELECT dish_name,price FROM dishes');
$row = $q->fetchAll();

