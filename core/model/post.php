<?php

class PostModel
{
    public $config = array();
    public $data = array();

    function __construct()
    {
        // 設定読み込み
        $this->config = require APP_PATH.'config.php';

        foreach ($this->config['post'] as $name) {
            $this->data[$name] = '';
            if (isset($_POST[$name])) {
                $this->data[$name] = $_POST[$name];
            }
        }
    }
}
