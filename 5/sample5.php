<?php
/*
//1-1
function page_header(){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}
*/
/*
//5-2
page_header();
print "Welcome, $user";
print "</body></html>";
*/
/*
//5-3
$user = 'test';
function page_header(){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}
page_header();
print "Welcome,$user";
page_footer();

function page_footer(){
    print '<hr>Thanks for visiting';
    print '</body></html>';
}
*/
/*
//5-4
function page_header2($color){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#'.$color.'">';
}
//実際の出力ソース
page_header2('cc00cc');

//警告テスト
//page_header2();
*/
/*
//5-5
function page_header3($color = 'cc00cc'){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#'.$color.'">';
}

page_header3();

*/
/*
//5-6,5-7
function page_header4($coler,$title){
    print '$titleの引数'.$title.'<br>';
    print '$colerの引数'.$coler;
}

page_header4("第一引数文字列","第二引数文字列");
*/

/*
//5-8-1

function page_header5($color,$title,$header = 'Welcome'){
    print '$titleの引数'.$title;
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}

//page_header5('cc00cc','my wonderful');
//page_header5('cc00cc','my wonderful','This is great');
*/
/*
//5-8-2
function page_header6($color,$title = 'デフォルト文字を使用',$header = 'Welcome'){
    print '$titleの引数'.$title;
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}

//page_header6('66cc99');
//page_header6('66cc99','my wonderful');
//page_header6('66cc99','my wonderful','This is great');
*/

/*
//5-8-3
function page_header7($color = '336699',$title = 'デフォルト文字を使用',$header = 'Welcome'){
    print '$titleの引数'.$title;
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}

//page_header7();
//page_header7('66cc99');
//page_header7('66cc99','my wonderful');
//page_header7('66cc99','my wonderful','This is great');

*/
/*
//5-9
function countdown($top){
    while($top > 0){
        print "$top..";
        $top--;
    }
    print "boon!\n";
}

$counter = 5;
countdown($counter);
print '今のカウンター'.$counter;
*/
/*
//5-10
$number_to_display = number_format(321442019);
print "返り値の取得:$number_to_display";
*/
/*
//5-11 5-12
function restaurant_check($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

//5-12
$total = restaurant_check(15.22,8.22,15);

print '$20や、どうやって払うんや？<br>';

if($total > 20){
    print "カードで一括で";
}else{
    print "食い逃げいいっすか？";
}
*/

/*
//5-13
function restaurant_check2($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip = $meal + $tax_amount + $tip_amount;
    print "$total_notip<br>";
    print "$total_tip<br>";
    return array($total_notip,$total_tip);
}
//5-14
$totals = restaurant_check2(15.22,8.25,15);

if($totals[0] < 20){
    print 'total[0]の中身:'.$totals[0].'<br>';
}
if($totals[1] < 20){
    print 'total[1]の中身:'.$totals[1].'<br>';
}
*/

/*
//5-15 5-16 5-17
function payment_method($cash_on_hand,$amount){
    if($amount > $cash_on_hand){
        return 'credit card';
    }else{
        return 'cash';
    }
}


function restaurant_check($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

$total = restaurant_check(15.22,8.25,15);
$method = payment_method(20,$total);

print "payment_methodの計算結果".$method.'<br>';

if (restaurant_check(15.22,8.25,15) < 20){
    print '20がでかい';
}else{
    print 'restaurant_checkがでかい';
}
*/
/*
//5-18
function can_pay_cash($cash_on_hand,$amount){
    if($amount > $cash_on_hand){
        return false;
    }else{
        return true;
    }    
}

function restaurant_check($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

$total = restaurant_check(15.22,8.25,15);


if(can_pay_cash(20,$total)){
    print "キャッシュで払ってやるぜ";
}else{
    print "食い逃げ！";
}
*/
/*
//5-19

function complete_bill($meal,$tax,$tip,$cash_on_hand){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    if($total_amount > $cash_on_hand){
        return false;
    }else{
        return $total_amount;
    }        
}

if ($total = complete_bill(15.22,8.25,15,20)){
    print '支払える額:'.$total.'<br>';
}else{
    print '金？ねーよ';
}
*/
/*
//5-20
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
    print "採食野郎:$dinner<br>";
    $dinner = 'Sauteed Pea Shoots';
    print $dinner.'<br>';
}

function kosher_dinner(){
    print "肉食野郎:$dinner<br>";
    $dinner = 'Kung Pao Chiken';
    print $dinner.'<br>';
}

print "採食系<br>";
vegetarian_dinner();
print "採食系<br>";
kosher_dinner();
print "printの\$dinner:$dinner<br>";
*/
/*
//5-21
$dinner = 'Curry Cuttlefish';

function macrobiotic_dinner(){
    $dinner = "Some Vegetables";
    print "Dinner is $dinner";
   
    print "but  I'd rather have";
    print $GLOBALS['dinner'];
    print '<br>';
}

macrobiotic_dinner();
print "Regular dinner is:$dinner";
*/
/*
//5-22
$dinner = 'Curry Cuttlefish';

function hungry_dinner(){
    $GLOBALS['dinner'] .= 'and Deep-Fried-Taro';
}

print "Regular dinner is $dinner";
print '<br>';
hungry_dinner();
print "Hungry dinner is $dinner";
*/
/*
//5-23
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
    global $dinner;
    print "Dinner was $dinner,but now it's";
    $dinner = 'Sauteed Pea Shoots';
    print $dinner;
    print '<br>';
}

print "Regular Dinner is $dinner<br>";
vegetarian_dinner();
print "Regular Dinner is $dinner<br>";
*/
/*
//5-24
function countdown(int $top){
    while($top > 0){
        print "$top..";
        $top--;
    }
    print "boom!<br>";
}

$counter = 5;
countdown($counter);
print "Now,counter is $counter<br>";
*/

/*
//5-25
function restaurant_check($meal,$tax,$tip): float{
    //$tax_amount = $meal * ($tax / 100);
    //$tip_amount = $meal * ($tip / 100);
    $tax_amount = $meal * ($tax);
    $tip_amount = $meal * ($tip);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

$total = restaurant_check(15.22,8.25,15);
//$total = restaurant_check(1,1,1);

print "$total<br>";
*/

//5-26はrestaurant_check.php
/*<?php


function restaurant_check($meal,$tax,$tip): float{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

function payment_method($cash_on_hand,$amount){
    if($amount > $cash_on_hand){
        return 'credit card';
    }else{
        return 'cash';
    }
}*/
//5-27
require 'restaurant_check.php';

$total_bill = restaurant_check(25,8.875,20);

$cash = 30;

print "I need you pay with" .payment_method($cash,$total_bill);