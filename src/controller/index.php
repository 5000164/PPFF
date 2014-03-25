<?php

class PageController extends Controller
{
}



$page_controller = new PageController();
$page_controller->set_page('index');
$page_controller->set_next_page('confirm');
return $page_controller;
