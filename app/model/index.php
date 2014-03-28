<?php

Class Response
{
    public $value;
    public $error;
    public $display;
}


$response = new Response();

$response->value   = new DataModel('value');
$response->error   = new DataModel('error');
$response->display = new DataModel('display');

return $response;
