<?php  
try{
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($make_thinks_cheaper){
        $db->exec("DELETE FROM dishes WHERE price > 19.95");
        print "19.95以上のデータを消しました、確認お願いします";
    }else{
        $db->exec("DELETE FROM dishes");
        print "すべてのデータを消しました、確認お願いします";
    }
}catch(PDOException $e){
    print "データの追加出来ませんでした".$e->getMessage();
}