<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$q = $db->exec("DROP TABLE dishes2");

print "テーブル削除出来ました、確認お願いします";

}catch(PDOException $e){
    print "テーブル削除出来ませんでした".$e->getMessage();
}