<?php

class PageModel extends Model
{
  public $error_flag = false;

  public function validate()
  {
    foreach ($this->config['error'] as $value)
    {
      switch(true)
      {
        case $value === 'name':
        {
          if ($this->post['familyname'] === '' || $this->post['firstname'] === '')
          {
            $this->error_flag = true;
          }
          break;
        }
        case $value === 'gender':
        {
          if (!($this->post['gender'] === '1' || $this->post['gender'] === '2'))
          {
            $this->error_flag = true;
          }
          break;
        }
      }
    }
  }
}



$page_model = new PageModel();
$page_model->get_post();
$page_model->validate();
return $page_model;
