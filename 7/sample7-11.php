<?php

$ok = filter_input(INPUT_POST,'price',FILTER_VALIDATE_INT);

if(is_null($ok) || ($ok === false)){
    $errors[] = 'Please enter a valid age.';
}