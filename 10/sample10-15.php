<?php

require 'FormHelper.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    list($errors,$input) = validate_form();
    if($errors){
        show_form($errors);
    }else{
        process_form($input);
    }
}else{
    show_form();
}
function show_form($errors = array()){

    $form = new FormHelper();

    if($errors){
        $errorHtml = '<ul><li>';
        $errorHtml .= implode('</li><li>',$errors);
        $errorHtml .= '</li></ul>';
    }else{
        $errorHtml = '';
    }

    print <<<_FORM_
    <form method="POST" action="{$form->encode($_SERVER['PHP_SELF'])}">
    $errorHtml
    Username:{$form->input('text',['name' => 'username'])}<br/>
    </form>
    _FORM_;
}
