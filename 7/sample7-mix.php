<?php

//7-13
function validate_form(){
    $errors = array();
    $input = array();

    $input['age'] = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    if(is_null($input['age'])||($input['age'] === false)){
        $errors[] = 'Pl';
    }
    /*
    7-15
    $input['age'] = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 18,'max_range' => 65)));
    if(is_null($input['age'])||($input['age'] === false)){
        $errors[] = 'Please enter a valid age between 18 and 65';
    }
    */

    $input['price'] = filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
    if(is_null($input['price']) || ($input['price'] === false)){
        $errors[] = 'Please enter a valid price';
    }
    
    /*
    7-15
    $input['price'] = filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
    if(is_null($input['price']) || ($input['price'] === false) 
    || ($input['price'] < 10.00) || ($input['price'] > 50.00)){
        $errors[] = 'Please enter a valid price';
    }
    */

    $input['name'] = trim($_POST['name'] ?? '');
    if(strlen($input['name']) == 0){
        $errors[] = "your name is required.";
    }

    return array($errors,$input);
}



//7-14
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    list($form_errors,$input) = validate_form();
    if($form_errors){
        show_form($form_errors);
    }else{
        process_form($input);
    }
}else{
    show_form();
}

//7-16
$range_start = new DateTime('6 months ago');
$range_end = new DateTime();


$input['year'] = filter_input(INPUT_POST,'year',FILTER_VALIDATE_INT,
array('options' => array('min_range' => 1900,'max_range' => 2100)));

$input['month'] = filter_input(INPUT_POST,'month',FILTER_VALIDATE_INT,
array('options' => array('min_range' => 1,'max_range' => 12)));

$input['day'] = filter_input(INPUT_POST,'day',FILTER_VALIDATE_INT,
array('options' => array('min_range' => 1,'max_range' => 31)));

if($input['year'] && $input['month'] && $input['day'] &&
checkdate($input['year'],$input['month'],$input['day'])){
    $submitted_date = new DateTime(strtotime($input['year'].'-'.$input['month'].'-'.$input['day']));

    if(($range_start > $submitted_date || $range_end < $submitted_date)){
        $errors[] = 'Please choose a date less than six month old.';
    }
}else{
    $errors[] = 'Please enter a valid email address';
}

//7-17
$input['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
if(!$input['email']){
    $errors[] = 'Please enter a valid email address';
}