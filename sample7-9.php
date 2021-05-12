<?php

if(strlen($_POST['email']) == 0){
    $errors[] = "you must enter an email adderss";
}