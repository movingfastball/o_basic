<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->exec("UPDATE dishes SET is_spicy = 1 WHERE dish_name = 'General Tso\'s Chicken'");
$db->exec("UPDATE dishes SET is_spicy = 1,price=price*2 WHERE dish_name = 'Braised Sea Cucumber'");
print "データの変更出来ました、確認お願いします";

}catch(PDOException $e){
    print "データの追加出来ませんでした".$e->getMessage();
}