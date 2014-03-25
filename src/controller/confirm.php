<?php

class PageController extends Controller
{
}



$page_controller = new PageController();

if ($response->error_flag === true)
{
  $page_controller->set_page('index');
  $page_controller->set_next_page('confirm');
}
else
{
  $page_controller->set_page('confirm');
  $page_controller->set_next_page('finish');
}

return $page_controller;
