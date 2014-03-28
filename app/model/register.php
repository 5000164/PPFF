<?php

Class Response
{
    public $value;
    public $display;
    public $error;
    public $error_flag = false;
    public $hidden_data = '';
}


$response = new Response();

$post = new PostModel();
$response->value   = new DataModel('value');
$response->error   = new DataModel('error');
$response->display = new DataModel('display');

ValidateModel::validate_value($response->value, $post);
ValidateModel::validate_display($response->display, $post);
$response->error_flag = ValidateModel::validate_error($response->error, $post);
$response->hidden_data = ValidateModel::make_hidden_data($post);

return $response;
