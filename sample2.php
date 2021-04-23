<?php

/*//sample2‐3
$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);

if($zip_length != 5){
    print '5文字じゃないから直せ';
}else{
    print 'OKにゃ';
}
*/

/*//sample2‐4
if(strlen(trim($_POST['zipcode'])) !=5){
    print '5文字以上打てや';
}else{
    print 'OKにゃ';
}
*/

/*
//sample2‐5
if($_POST['email'] == 'abc.mail'){
    print "等しいよ";
}else{
    print "違うよ";
}
*/

/*
//sample2-6
if(strcasecmp($_POST['email'],'def.email') == 0) {
    print "0を返します、つまり同じです";
}else{
    //print'1じゃい';
}
*/


//if(strcasecmp())
/*
//sample
$my_class = 'lunch';
$html = '<span class = "{class}">友達カード<span><span class = "{class}">魚</span>';
print str_replace('{class}',$my_class,$html);
*/


/*
//p31
$page_header = <<<HTML_HEADER
<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h>
HTML_HEADER;

echo $page_header;
*/
/*
//P34 2-20
$birthday = 5;
$birthday = $birthday + 1;
var_dump($birthday);
++$birthday;
var_dump($birthday);
*/
/*
//p34 2-22
$page_title = 'MENUS';
$meat = 'pork';
$vegetable = 'yasai';
print <<<HTML_HEADER
<html>
<head><title>$page_title</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h>
<li>$meat and $page_title
<li>$meat
<li>$meat AND $vegetable
HTML_HEADER;
*/