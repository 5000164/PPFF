<?php

class Controller
{
  public $config = array();
  public $title = '';
  public $path = '';
  public $next_page = '';

  function __construct()
  {
    // 設定読み込み
    $this->config = require SRCPATH.'config.php';
  }

  public function get_page()
  {
    $this->path = $this->config['controller']['default'];
    if (isset($_POST['page']))
    {
      foreach ($this->config['controller'] as $key => $value)
      {
        if ($key === $_POST['page'])
        {
          $this->path = $value;
        }
      }
    }
  }

  public function set_page($controller)
  {
    $this->path = $this->config['controller'][$controller];
    $this->title = $this->config['title'][$this->path];
  }

  public function set_next_page($next_page)
  {
    $this->next_page = $next_page;
  }
}



$page_controller = new Controller();
$page_controller->get_page();
return $page_controller;
