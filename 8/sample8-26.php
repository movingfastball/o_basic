<?php  
try{

$_POST['new_dish_name'] = 'Fried Bean Curd';

$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("INSERT INTO dishes (dish_name) VALUES(?)");
$stmt->execute(array($_POST['new_dish_name']));
print "データの更新出来ました、確認お願いします<br>";

}catch(PDOException $e){
    print "データの更新出来ませんでした".$e->getMessage();
}