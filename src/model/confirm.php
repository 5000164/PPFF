<?php

class PageModel extends Model
{
  public $error_flag = false;
  public $hidden_data = '';

  public function set_value()
  {
    foreach ($this->config['value'] as $value)
    {
      $this->value[$value] = '';
      switch(true)
      {
        case $value === 'familyname':
        {
          $this->value['familyname'] = $this->escape($this->post['familyname']);
          break;
        }
        case $value === 'firstname':
        {
          $this->value['firstname'] = $this->escape($this->post['firstname']);
          break;
        }
        case $value === 'gender1':
        {
          if ($this->post['gender'] === '1')
          {
            $this->value['gender1'] = 'checked';
          }
          break;
        }
        case $value === 'gender2':
        {
          if ($this->post['gender'] === '2')
          {
            $this->value['gender2'] = 'checked';
          }
          break;
        }
        case $value === 'location1':
        {
          if ($this->post['location'] === '1')
          {
            $this->value['location1'] = 'selected';
          }
          break;
        }
        case $value === 'location2':
        {
          if ($this->post['location'] === '2')
          {
            $this->value['location2'] = 'selected';
          }
          break;
        }
        case $value === 'location3':
        {
          if ($this->post['location'] === '3')
          {
            $this->value['location3'] = 'selected';
          }
          break;
        }
        case $value === 'mood1':
        {
          if ($this->post['mood1'] === '1')
          {
            $this->value['mood1'] = 'checked';
          }
          break;
        }
        case $value === 'mood2':
        {
          if ($this->post['mood2'] === '1')
          {
            $this->value['mood2'] = 'checked';
          }
          break;
        }
        case $value === 'mood3':
        {
          if ($this->post['mood3'] === '1')
          {
            $this->value['mood3'] = 'checked';
          }
          break;
        }
        case $value === 'request':
        {
          $this->value['request'] = $this->escape($this->post['request']);
          break;
        }
      }
    }
  }

  public function set_error()
  {
    foreach ($this->config['error'] as $value)
    {
      $this->error[$value] = '';
      switch(true)
      {
        case $value === 'name':
        {
          if ($this->post['familyname'] === '' || $this->post['firstname'] === '')
          {
            $this->error['name'] = '名前を入力してください。';
            $this->error_flag = true;
          }
          break;
        }
        case $value === 'gender':
        {
          if (!($this->post['gender'] === '1' || $this->post['gender'] === '2'))
          {
            $this->error['gender'] = '性別を選択してください。';
            $this->error_flag = true;
          }
          break;
        }
      }
    }
  }

  public function set_display()
  {
    foreach ($this->config['display'] as $value)
    {
      $this->display[$value] = '';
      switch(true)
      {
        case $value === 'familyname':
        {
          $this->display['familyname'] = $this->escape($this->post['familyname']);
          break;
        }
        case $value === 'firstname':
        {
          $this->display['firstname'] = $this->escape($this->post['firstname']);
          break;
        }
        case $value === 'gender':
        {
          if ($this->post['gender'] === '1')
          {
            $this->display['gender'] = '男性';
          }
          else if ($this->post['gender'] === '2')
          {
            $this->display['gender'] = '女性';
          }
          break;
        }
        case $value === 'location':
        {
          if ($this->post['location'] === '1')
          {
            $this->display['location'] = '地球';
          }
          else if ($this->post['location'] === '2')
          {
            $this->display['location'] = '月';
          }
          else if ($this->post['location'] === '3')
          {
            $this->display['location'] = '太陽';
          }
          break;
        }
        case $value === 'mood1':
        {
          if ($this->post['mood1'] === '1')
          {
            $this->display['mood1'] = '眠い';
          }
          break;
        }
        case $value === 'mood2':
        {
          if ($this->post['mood2'] === '1')
          {
            $this->display['mood2'] = 'お腹空いた';
          }
          break;
        }
        case $value === 'mood3':
        {
          if ($this->post['mood3'] === '1')
          {
            $this->display['mood3'] = '疲れた';
          }
          break;
        }
        case $value === 'request':
        {
          $this->display['request'] = $this->escape($this->post['request']);
          break;
        }
      }
    }
  }

  public function make_hidden_data()
  {
    foreach ($this->config['post'] as $name)
    {
      if ($name !== 'page')
      {
        $value = $this->escape($this->post[$name]);
        $this->hidden_data .= '<input type="hidden" name="'.$name.'" value="'.$value.'">';
      }
    }
  }
}



$page_model = new PageModel();
$page_model->get_post();
$page_model->set_value();
$page_model->set_error();
$page_model->set_display();
$page_model->make_hidden_data();
return $page_model;
