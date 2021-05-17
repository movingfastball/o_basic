<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
}catch(PDOException $e){
    print "Couldn't".$e->getMessage();
}
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$result = $db->exec("INSERT INTO dishes (dish_size,dish_name,price,is_spicy) 
                VALUES ('large','Sesame Seed Puff', 2.50 ,0)");

if(false === $result){
    $error = $db->errorInfo();
    print "Couldn't insert<br>";
    print "SQL Error={$error[0]},DB Error={$error[1]},Message={$error[2]}<br>";
}

