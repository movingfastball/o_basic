<?php
/*
//3-1
$logged_in = false;
if($logged_in){
    print "これは真だ";
}
*/
/*
//3-2
$logged_in = true;
print "テスト表示<br>";
if($logged_in){
    print "表示１<br>";
    print "表示２<br>";
}
print "表示３";
*/
/*
//3-3
$logged_in = false;
print "テスト表示<br>";
if($logged_in){
    print "表示１<br>";
    print "表示２<br>";
}else{
    print "else表示1<br>";
    print "else表示2<br>";
}
print "表示３";
*/
/*
//3-4
$logged_in = false;
$new_messages = false;
$emergency = true;
if($logged_in){
    print "1つ目の分岐だよ";
}elseif($new_messages){
    print "2つ目の分岐だよ";
}elseif($emergency){
    print "3つ目の分岐だよ";
}
*/
/*
//3-5
$logged_in = false;
$new_messages= false;
$emergency= false;
if($logged_in){
    print"ようこそ1行目";
}elseif($new_messages){
    print "2行目";
}elseif($emergency){
    print "3行目";
}else{
    print "全部falseにしたんですね";
}
*/
/*
//3-6
$new_messages = 10;
$max_messages = 10;
$dinner = "Braisde Scallops";
if($new_messages == 10){
    print "10だよ";
}

if($new_messages == $max_messages){
    print "等しい";
}

if($dinner == 'Braisde Scallops'){
    print "よかったな";
}
*/
/*
//3-7
$new_messages = 9;
$dinner = "inu";
if($new_messages != 10){
    print "10じゃないね<br>";
}
if($dinner != 'Braised Scallop'){
    print "Braised Scallopじゃないね<br>";
}
*/
/*
//3-8
$age1 = 18;
$age2 = 66;
$celsius_temp = -10;
$kelvin_temp = 20;


if($age1 > 17){
    print "17よりでかい<br>";
}

if($age2 >= 65){
    print "65と同等かそれ以上<br>";
}
if($celsius_temp <= 0){
    print "0かそれ以下<br>";
}
if($kelvin_temp < 20.3){
    print "20.3以下<br>";
}
*/
/*
//3-9
$price_1 = 0.00001;
$price_2 = 0.00008;
if(abs($price_1 - $price_2) < 0.00001){
    print "とりあえず真";
}else{
    print "とりあえず偽な";
}
*/
/*
//3-10
$word = 'gaa';
if($word < 'baa') {
	print "baaより小さい";
}

if($word >= 'foo') {
	print "zooより大きい";
}
*/

/*
//3-11 辞書の順で比較される
if ("x54321" > "x5678") {
   	print "x54321が真";
}else{
	print "x54321が大きいことが偽";
}
*/
/*
//3-11 以下の値は辞書の順で比較される
if ('6 pack' < '55 card stud') {
   	print "55 card studが真";
}else{
	print "55 card studが大きいことが偽";
}
*/
/*
//3-11 以下の値は数値の順で比較される
if ('6 pack' < '55') {
   	print "55が真";
}else{
	print "55が偽";
}
*/

/*
//3-12 
$x=strcmp("x54321","x56321");
var_dump($x);
print "<br>";
if($x > 0) {
    var_dump($x);
    print "<br>";
	print "表示1";
} elseif($x < 0) {
    var_dump($x);
    print "<br>";	
	print "表示2";
}
*/
/*
//3-12
$x=strcmp("54321","5678");
if($x > 0) {
    var_dump($x);
    print "<br>";
	print "表示1";
}elseif($x < 0){
    var_dump($x);
    print "<br>";	
	print "表示2";
}
*/
/*
//3-12
$x=strcmp('6 pack','55 card stud');
if($x > 0) {
    var_dump($x);
    print "<br>";
	print "表示1";
}elseif($x < 0){
    var_dump($x);
    print "<br>";	
	print "表示2";
}
*/
/*
//3-12
$x=strcmp('6 pack',55);
if($x > 0) {
    var_dump($x);
    print "<br>";
	print "表示1";
}elseif($x < 0){
    var_dump($x);
    print "<br>";	
	print "表示2";
}
*/
/*
//3-13
//1は12.7より小さいので$aは負数になる
$a = 1 <=> 12.7;

//「c」は「b」より後に来るので$bは正数になる
$b = "charlie" <=> "bob";

//数字文字数の比較はstrcmp()ではなく<と>のように機能する
$x = '6 pack' <=> '55 card stud';

if($x > 0){
    var_dump($a);
    print "<br>";
    var_dump($b);
    print "<br>";
    var_dump($x);
    print "<br>";
	print "表示1";
}elseif($x < 0){
    var_dump($a);
    print "<br>";
    var_dump($b);
    print "<br>";
    var_dump($x);
    print "<br>";	
	print "表示2";
}
*/
/*
//3-14
$finished = false;
var_dump($finished);
print "<br>";
if($finished == false){
	var_dump($finished);
    print "<br>";
	print "表示";
}
*/
/*
//3-14
var_dump($finished);
if(!$finished){
	var_dump($finished);
	print "表示";
}
*/
/*
//3-15
$first_name = 'test';
$last_name ='test';
var_dump(!strcasecmp($first_name,$last_name));
if (!strcasecmp($first_name,$last_name)){
    print "<br>";
	print '$first_name and $last_name は等しい';
}
*/

/*
//3-16

$age = 14;

if(($age >= 13) &&($age < 65)){
	print "表示結果_真";
}
*/
/*
if(($meal == 'breakfast')||($dessert == 'souffle')){
	print "表示結果_真";
}
*/
/*
//3-17
$i = 1;
print '<select name="people">';
while ($i <= 10){
	print "<option>$i</option>\n";
	$i++;
}
print '</select>';
*/
/*
//3-18
print '<select name = "people">';
for($i = 1;$i <= 13;$i++){
	print "<option>$i</option>\n";
}
print '</select>';
*/
/*
//3-19
print '<select name="doughunts">';
for($min = 1,$max= 10;$min < 50;$min += 10,$max += 10){
	print "<option>$min - $max</option>\n";
}
print'</select>';
*/












