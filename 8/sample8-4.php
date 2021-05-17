<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$q = $db->exec("CREATE TABLE dishes2(
    dish_id INT PRIMARY KEY,
    dish_name VARCHAR(255),
    price DECIMAL(4,2),
    is_spicy INT
    )");

print "テーブル作成出来ました、確認お願いします";

}catch(PDOException $e){
    print "テーブル作成出来ませんでした".$e->getMessage();
}