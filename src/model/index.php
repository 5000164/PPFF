<?php

class PageModel extends Model
{
}



$page_model = new PageModel();
$page_model->get_post();
$page_model->set_value();
$page_model->set_error();
$page_model->set_display();
return $page_model;
