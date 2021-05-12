<?php
/*
//4-1
$vegetables = array('corn' => 'yellow',
		    'beet' => 'red',
		    'carrot' => 'orange');

$dinner = array(0 => 'Sweet Corn and Asparagus',
	        1 => 'Lemon Chicken',
	        2 => 'Braised Bamboo Fungus');


$computers = array('trs-80' => 'Radio Shack',
	                2600 => 'Atari',
	                'Adam' => 'Coleco');

                    print_r($vegetables);
                    print "<br>";
                    print_r($dinner);
                    print "<br>";
                    print_r($computers);

*/
/*            
//4-2
$vegetables = ['corn' => 'yellow','beet' => 'red','carrot' => 'orange'];

$dinner = [0 => 'Sweet Corn and Asparagus',
	   1 => 'Lemon Chicken',
	   2 => 'Braised Bamboo Fungus'];


$computers = ['trs-80' => 'Radio Shack',2600 => 'Atari','Adam' => 'Coleco'];
                    
print_r($vegetables);
print "<br>";
print "<br>";
print_r($dinner);
print "<br>";
print "<br>";
print_r($computers);
*/
/*
//4-3
$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';
print_r($vegetables);
*/

/*
//4-3
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';
print_r($dinner);
*/
/*
//4-3
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';
print_r($computers);
*/

//4-4
/*
//$vegetablesは配列になる
$vegetables['corn'] = 'yellow';
print "<br>";
print_r($vegetables);
*/

/*
//['corn'] = 'yellow'を削除することでスカラーになる
$vegetables = 'delicious';
print "<br>";
print $vegetables;
*/
/*
$fruits = 283;
print "<br>";
print $fruits;

//正しく動作しない‐‐fruitsは283のままで
//PHPエンジンは警告を発する
$fruits['potassium'] = 'banana';
print "<br>";
print_r($fruits);

//しかしこれはfruitsを上書きして配列になる
$fruits = array('potassium' => 'banana');
print "<br>";
print_r($fruits);
*/
/*
//4-5
$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');

print "表示される$dinner[0]と$dinner[1]と$dinner[2]";
*/
/*
//4-6
//2つの要素を持つ$lunch配列を作成する
//$lunch[0]を設定する
$lunch[] = 'Dried Mushrooms in Brown Sauce';
//$lunch[1]を設定する
$lunch[] = 'Pineapple and Yu Fungus';
print "<br>";
print_r($lunch);

$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');

$dinner[] = 'Flank Skin with Spiced Flavor';
print "<br>";
print_r($dinner);
*/
/*
//4-7
$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');

$dishes = count($dinner);
print "配列合計数$dishes";
*/
/*
//4-8
$meal = array(
'breakfast' => 'Walunt Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce'
);

print "<table>\n";
foreach($meal as $key => $valude){
    print "<tr><td>$key</td><td>$valude</td></tr>\n";
}
print '</table>';
*/
/*
//4-9
$row_styles =array('even','odd');

$style_index = 0;

$meal = array(
    'breakfast' => 'Walunt Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
    );

print "<table>\n";
foreach($meal as $key => $value){
    print '<tr class="' . $row_styles[$style_index].'">';
    print "<td>$key</td><td>$value</td></tr>\n";
	$style_index = 1 - $style_index;
}
print '</table>';
*/
/*
//4-10
$meals = array(
    'Walunt Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50
    );

foreach($meals as $dish => $price){
	$meals[$dish] = $meals[$dish] * 2;
}

foreach($meals as $dish => $price){
	printf("出力物:%s<br>出力結果:$%.2f<br><br>",$dish,$price);
}
*/
/*
//4-11
$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');

foreach($dinner as $dish){
	print "食い物:$dish<br>";
}
*/
/*
//4-12
$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');
for($i=0,$num_dishes = count($dinner);$i < $num_dishes;$i++){
	print "皿番号$i".'は'."$dinner[$i]<br>";
}
*/
/*
//4-13

$row_styles =array('even','odd');

$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');
print "<table>\n";

for($i=0,$num_dishes = count($dinner);$i < $num_dishes;$i++){
	print '<tr class="'. $row_styles[$i % 2] . '">';
	print "<td>要素 $i</td><td>$dinner[$i]</td></tr><br>";
}

print '</table>';
*/
/*
//4-14

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';

foreach($letters as $letter){
	print 'そのままの出力'.$letter.'<br>';
}
print '<br><br>';
for($i=0,$num_letters = count($letters);$i < $num_letters;$i++){
	print '要素をソートした状態:';
	print '要素数'.$i.'値'.$letters[$i].'<br>';
}
*/

/*
//4-15
$meals = array(
    'Walunt Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
	'Shrimp Puffs' => 0
    );
$books = array(
	"The Eater's Guide to Chinese Characters",
	"How to Cook and Eat in Chinese"
	);

//これはtrue	
if(array_key_exists('Shrimp Puffs',$meals)){
	print "Shrimp Puffsは真<br>";
}else{
	print "Shrimp Puffsは偽<br>";
}

//これはfalse	
if(array_key_exists('Steak Sandwich',$meals)){
	print "Steak Sandwichは真<br>";
}else{
	print "Steak Sandwichは偽<br>";
}

//これは0、1ならtrue それ以外はfalse
if(array_key_exists(1,$books)){
	print "配列を確認出来た<br>";
}else{
	print "配列を確認出来ない<br>";
}
*/

/*
//4-16
$meals = array(
    'Walunt Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
	'Shrimp Puffs' => 0
    );
$books = array(
	"The Eater's Guide to Chinese Characters",
	"How to Cook and Eat in Chinese"
	);

if(in_array(3,$meals)){
	print "配列を確認出来た<br>";
}else{
	print "配列を確認出来ない<br>";
}

if(in_array('How to Cook and Eat in Chinese',$books)){
	print "How to Cookの配列を確認出来た<br>";
}else{
	print "How to Cookの配列を確認出来ない<br>";
}

if(in_array('the eater\'s guide to chinese characters',$books)){
	print "the eaterの配列を確認出来た<br>";
}else{
	print "the eaterの配列を確認出来ない<br>";
}
*/


/*
//4-17
$meals = array(
    'Walunt Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
	'Shrimp Puffs' => 0
    );
$dish = array_search(6.50,$meals);
if($dish){
	print "$dish cost \$6.50";
}
*/
/*
//4-18
$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++;
$dishes['Roast Duck'] = 3;
print 'Roast Duckの中身'.$dishes['Beef Chow Foon'];
print "<br>";
print 'Roast Duckの中身'.$dishes['Roast Duck'];

$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];

print "<br>";
print 'totalの中身'.$dishes['total'];

if($dishes['total'] > 15){
	print "<br>";
	print "清算だ: ";
}

print 'あんたは肉を'.$dishes['total'].'枚もくいやがった';
*/

/*
//4-19
$meals['breakfast'] = 'Walnut Bun';
$meals['lunch'] = 'Eggplant with Chili Sauce';
$amounts = array(3,6);

print $meals['breakfast'];
print "<br>";
print $meals['lunch'];
print "<br>";
print $amounts[0];
print "<br>";
print $amounts[1];
*/
/*
//4-20
$meals['Walunt Bun'] = '$3.95';
$hosts['www.example.com'] = 'website';

print "Walunt Bunの金額{$meals['Walunt Bun']}";
print "<br>";
print "www.example.comの内容{$hosts['www.example.com']}";
*/
/*
//4-21
$dimsum = array('CHicken Bun','Stuffed Duck Web','Turnip Cake');
$menu = implode(',',$dimsum);
print $menu;
*/
/*
//4-21
$letters = array('A','B','C','D');
print implode('',$letters);
*/
/*
//4-22
$dimsum = array('CHicken Bun','Stuffed Duck Web','Turnip Cake');
print '<tr><td>'.implode('</td><td>',$dimsum).'</td></tr>';
*/
/*
//4-23
$fish = 'Bass,Carp,Pike,Flounder';
$fish_list = explode(',',$fish);
print "今回の出力結果 : $fish_list[1] ";
print "<br>";
print "今回の出力結果 : $fish_list[3] ";
*/

/*
//4-24

$dinner = array( 'Sweet Corn and Asparagus',
	            'Lemon Chicken',
	            'Braised Bamboo Fungus');

$meal = array(
'breakfast' => 'Walunt Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce'
);

print "Betore Sorting:\n";
print "<br>";
foreach($dinner as $key => $value){
	print "\$dinner: $key $value\n";
	print "<br>";
}
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}
print "<br>";

sort($dinner);
sort($meal);

print "After Sorting:\n";
print "<br>";
foreach($dinner as $key => $value){
	print "\$dinner: $key $value\n";
	print "<br>";
}
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}
print "<br>";
*/

/*
//4-25

$meal = array(
	'breakfast' => 'Walunt Bun',
	'lunch' => 'Cashew Nuts and White Mushrooms',
	'snack' => 'Dried Mulberries',
	'dinner' => 'Eggplant with Chili Sauce'
	);

print "Betore Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}

asort($meal);

print "After Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}
*/
/*
//4-26

$meal = array(
	'breakfast' => 'Walunt Bun',
	'lunch' => 'Cashew Nuts and White Mushrooms',
	'snack' => 'Dried Mulberries',
	'dinner' => 'Eggplant with Chili Sauce'
	);

print "Betore Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}

ksort($meal);


print "After Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}
*/

/*
//4-27

$meal = array(
	'breakfast' => 'Walunt Bun',
	'lunch' => 'Cashew Nuts and White Mushrooms',
	'snack' => 'Dried Mulberries',
	'dinner' => 'Eggplant with Chili Sauce'
	);

print "Betore Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}

arsort($meal);


print "After Sorting:\n";
print "<br>";
foreach($meal as $key => $value){
	print "\$meal: $key $value\n";
	print "<br>";
}
*/
/*
//4-28,4-29
$meals = array(
	'breakfast' => ['Walunt Bun','Coffee'],
	'lunch' => ['Cashew Nuts' , 'White Mushrooms'],
	'snack' => ['Dried Mulberries','Salted Sesame Crab']
	);

$lunches = [
				['Chicken','Eggplant','Rice'],
				['Beef','Scallions','Noodles'],
				['Eggplant','Tofu']	
			];

$flavors = array('Japanese' => array('hot' => 'wasabi','salty' => 'soy sauce'),
				'Chinese' => array('hot' => 'mustard','pepper-salty' => 'prickly ash')									
				);

print $meals['lunch'][1].'<br>';
print $meals['snack'][0].'<br>';
print $lunches[0][0].'<br>';
print $lunches[2][1].'<br>';
print $flavors['Japanese']['salty'].'<br>';
print $flavors['Chinese']['hot'].'<br>';
*/

/*
//4-30

$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;

$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Asparagus'] +
							$prices['dinner']['Braised Bamboo Fungus'];

$specials[0][0] = 'Chestnut Bun';
$specials[0][1] = 'Walunt Bun';
$specials[0][2] = 'Peanut Bun';
$specials[1][0] = 'Chestnut Salad';
$specials[1][1] = 'Walnut Salad';

print $prices['dinner']['Sweet Corn and Asparagus'].'<br>';
print $prices['dinner']['total'].'<br>';
print $specials[1][1].'<br>';
*/
/*
//4-31
$flavors = array('Japanese' => array('hot' => 'wasabi','salty' => 'soy sauce'),
				'Chinese' => array('hot' => 'mustard','pepper-salty' => 'prickly ash')									
				);

foreach($flavors as $culture => $culture_flavors){
	foreach($culture_flavors as $flavors => $example){
		print '$culture:'.$culture.'&nbsp;&nbsp;$flavors:'.$flavors.'&nbsp;&nbsp;$example:'.$example;
		print'<br><br>';
	}
}
*/
/*
//4-32
$specials = array(
	array('Chestnut Bun','Walunt Bun','Peanut Bun'),
	array('Chestnut Salad','Walunt Salad','Peanut Salad'),
);

for($i = 0,$num_specials = count($specials); $i < $num_specials; $i++){
	//var_dump($specials);
	print "<br>";
	for($m = 0,$num_sub = count($specials[$i]); $m < $num_sub; $m++){
		print "Element[$i][$m]is".$specials[$i][$m]."\n";
		print "<br>";
	}

}
*/

//4-33
$specials = array(
	array('Chestnut Bun','Walunt Bun','Peanut Bun'),
	array('Chestnut Salad','Walunt Salad','Peanut Salad'),
);

for($i = 0,$num_specials = count($specials); $i < $num_specials; $i++){
	//var_dump($specials);
	print "<br>";
	for($m = 0,$num_sub = count($specials[$i]); $m < $num_sub; $m++){
		print "Element[$i][$m]is{$specials[$i][$m]}\n";
		print "<br>";
	}

}