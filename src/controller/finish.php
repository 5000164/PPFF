<?php

class PageController extends Controller
{
}



$page_controller = new PageController();

if ($response->error_flag === true)
{
  $page_controller->set_page('error');
}
else
{
  $page_controller->set_page('finish');
}

return $page_controller;
