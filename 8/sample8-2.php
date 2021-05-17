<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
print '接続成功';
}catch(PDOException $e){
    print "接続失敗".$e->getMessage();
}