<?php

class Model
{
  public $config = array();
  public $post = array();
  public $value = array();
  public $error = array();
  public $display = array();

  function __construct()
  {
    // 設定読み込み
    $this->config = require SRCPATH.'config.php';
  }

  public function get_post()
  {
    foreach ($this->config['post'] as $value)
    {
      $this->post[$value] = '';
      if (isset($_POST[$value]))
      {
        $this->post[$value] = $_POST[$value];
      }
    }
  }

  public function set_value()
  {
    foreach ($this->config['value'] as $value)
    {
      $this->value[$value] = '';
    }
  }

  public function set_error()
  {
    foreach ($this->config['error'] as $value)
    {
      $this->error[$value] = '';
    }
  }

  public function set_display()
  {
    foreach ($this->config['display'] as $value)
    {
      $this->display[$value] = '';
    }
  }

  public function escape($string)
  {
    return htmlspecialchars($string);
  }
}
