<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$affectedRows = $db->exec("INSERT INTO dishes (dish_id,dish_name,price,is_spicy) 
                VALUES (2,'General Tso''s Chicken', 2.50 ,1)");

print "データの追加出来ました、確認お願いします";

}catch(PDOException $e){
    print "データの追加出来ませんでした".$e->getMessage();
}