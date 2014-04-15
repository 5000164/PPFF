<?php

class PageController
{
    public $config = array();
    public $title = '';
    public $page = '';
    public $next_page = '';

    function __construct()
    {
        // 設定読み込み
        $this->config = require APP_PATH.'config.php';
    }

    public function get_page()
    {
        $this->page = $this->config['page']['default'];

        if (isset($_GET['page'])) {
            if ($_GET['page'] === 'finish') {
                $this->page = 'finish.php';
            }
        }

        if (isset($_POST['page'])) {
            foreach ($this->config['page'] as $key => $value) {
                if ($key === $_POST['page']) {
                    $this->page = $value;
                }
            }
        }
    }

    public function set_view_page($page)
    {
        $this->page  = $this->config['page'][$page];
        $this->title = $this->config['title'][$this->page];
    }

    public function set_next_page($next_page)
    {
        $this->next_page = $next_page;
    }

    public function redirect($next_page)
    {
        header('Location: http://'.HOME_URL.'?page='.$next_page);
        exit;
    }
}
