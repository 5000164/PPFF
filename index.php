<?php

// エラー表示
error_reporting(-1);
ini_set('display_errors', 1);

// パス設定
define('HOME_URL', '192.168.33.10/');
define('DOC_ROOT', __DIR__.'/');
define('CORE_PATH', __DIR__.'/core/');
define('APP_PATH', __DIR__.'/app/');

// Core読み込み
require CORE_PATH.'controller/page.php';
require CORE_PATH.'model/post.php';
require CORE_PATH.'model/data.php';
require CORE_PATH.'model/util.php';

// App読み込み
require APP_PATH.'model/validate.php';

// Controller
$controller = new PageController();
$controller->get_page();

// Model
$response = require APP_PATH.'model/'.$controller->page;

// Controller
$controller = require APP_PATH.'controller/'.$controller->page;

// View
$title     = $controller->title;
$value     = (array)$response->value->data;
$error     = (array)$response->error->data;
$display   = (array)$response->display->data;
$next_page = $controller->next_page;

ob_start();
require APP_PATH.'view/'.$controller->page;
$content = ob_get_clean();

require APP_PATH.'template.php';
