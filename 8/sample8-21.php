<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$count = $db->exec("UPDATE dishes SET price = price + 5 WHERE price > 1");

print "データの更新出来ました、確認お願いします<br>";
print $count;
}catch(PDOException $e){
    print "データの更新出来ませんでした".$e->getMessage();
}