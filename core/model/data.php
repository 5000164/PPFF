<?php

class DataModel
{
    public $config = array();
    public $data = array();

    function __construct($type)
    {
        // 設定読み込み
        $this->config = require APP_PATH.'config.php';

        foreach ($this->config[$type] as $name) {
            $this->data[$name] = '';
        }
    }
}
