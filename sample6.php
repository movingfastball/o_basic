<?php
/*
//6-1 6-2
class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){

        return in_array($ingredient,$this->ingredients);

    }
}

//6-2

$soup = new Entree;

$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken','water');

$sandwich = new Entree;

$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken','bread');


foreach(['chicken','lemon','bread','water'] as $ing){
    if($soup->hasIngredient($ing)){
        print "Soup contains $ing<br>";
    }
    if($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing<br>";
    }
}
*/
/*
//6-3 6-4
class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
    public static function getSizes(){
        return array('small','medium','large');
    }
}

//6-4
$sizes = Entree::getSizes();

foreach($sizes as $key => $value){
    print $value.'<br>';
}
*/

/*
//6-5 6-6
class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}

//6-6
$soup = new Entree('Chicken Soup',array('chicken','water'));
$sandwich = new Entree('chicken Sandwich',array('chicken','bread'));

foreach(['chicken','lemon','bread','water'] as $ing){
    print $ing.'<br>';
    if($soup->hasIngredient($ing)){
        print "Soup contains $ing<br>";
    }
    if($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing<br>";
    }
}
*/

/*
//6-7
class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}

$soup = new Entree('Chicken Soup',array('chicken','water'));
$sandwich = new Entree('chicken Sandwich',array('chicken','bread'));

foreach(['chicken','lemon','bread','water'] as $ing){
    print $ing.'<br>';
    if($soup->hasIngredient($ing)){
        print "Soup contains $ing<br>";
    }
    if($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing<br>";
    }
}
*/

/*
//6-8 エラー実験用 
class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}

$drink = new Entree('Glass of Milk','milk');
if($drink->hasIngredient('milk')){
    "Yummy!";
}
*/

/*
//6-9 
class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}
try{
    $drink = new Entree('Glass of Milk','milk');
    if($drink->hasIngredient('milk')){
        "Yummy!";
    }
}catch(Exception $e){
    print "Couldn't create the drink:". $e->getMessage();
}
*/

/*
//6-10
class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        print "Entree Oya<br>";
        return in_array($ingredient,$this->ingredients);
    }
}


class ComboMeal extends Entree {
    
    public function hasIngredient($ingredient){
        foreach($this->ingredients as $entree) {
            if($entree->hasIngredient($ingredient)){
                print "Entrede Kodomo<br>";
                return true;
            }
        }
        return false;
    }
}


$soup = new Entree('Chicken Soup',array('chicken','water'));
$sandwich = new Entree('chicken Sandwich',array('chicken2','bread2'));

$combo = new ComboMeal('Soup + Sandwich',array($soup,$sandwich));

foreach(['chicken1','water1','chicken2','bread2'] as $ing => $value){
    if($combo->hasIngredient($value)){
        print "Something in the combo contains $ing => $value<br>";
    }
}
*/
/*
//6-12

class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        print "Entree Oya<br>";
        return in_array($ingredient,$this->ingredients);
    }
}


class ComboMeal extends Entree {
    public function __construct($name,$entrees){
        parent::__construct($name,$entrees);
        foreach($entrees as $entree){
            if(! $entree instanceof Entree){
                throw new Exception('Elements of $entrees must be Entree objects');
            }
        }
    }

    public function hasIngredient($ingredient){
        foreach($this->ingredients as $entree){
            if($entree->hasIngredient($ingredient)){
                print "Entrede Kodomo<br>";
                return true;
            }
        }
        return false;
    }
}

$soup = new Entree('Chicken Soup',array('chicken1','water1'));
$sandwich = new Entree('chicken Sandwich',array('chicken2','bread2'));

$combo = new ComboMeal('Soup + Sandwich',array($soup,$sandwich));

foreach(['chicken1','water1','chicken2','bread2'] as $ing => $value){
    if($combo->hasIngredient($value)){
        print "Something in the combo contains $ing => $value<br>";
    }
}
*/

/*
//6-13
class Entree{
    private $name;
    protected $ingredients = array();

    public function getName(){
        return $this->name;
    }

    public function __construct($name,$ingredients){
        if(!is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}

$soup = new Entree('Chicken Soup',array('chicken1','water1'));
$sandwich = new Entree('chicken Sandwich',array('chicken2','bread2'));


foreach(['chicken1','water1','chicken2','bread2'] as $ing => $value){

        print "Something in the combo contains $ing => $value<br>";

}
*/
/*
//6-14
namespace o_basic;
class Fruit{
    public static function munch($bite){
        print "Here is a tiny munch of $bite";
    }
}
*/
/*
//6-15
use Tiny\Eating\Fruit as Snack;

use Tiny\Fruit;

//Tiny\Eating\Fruit::munch();を呼び出す
Snack::munch("strawberry");

//Tiny\Fruit::munch();をよびだす
Fruit::munch("orange");
*/