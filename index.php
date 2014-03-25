<?php
// エラー表示
error_reporting(-1);
ini_set('display_errors', 1);

// パス設定
define('DOCROOT', __DIR__.'/');
define('SRCPATH', __DIR__.'/src/');
define('CONTROLLERPATH', __DIR__.'/src/controller/');
define('MODELPATH', __DIR__.'/src/model/');
define('VIEWPATH', __DIR__.'/src/view/');

// Controller
$controller = require SRCPATH.'controller.php';

// Model
require SRCPATH.'model.php';
$response = require MODELPATH.$controller->path;

// Controller
$controller = require CONTROLLERPATH.$controller->path;

// View
$title = $controller->title;
$value = (array)$response->value;
$error = (array)$response->error;
$display = (array)$response->display;
$next_page = $controller->next_page;
ob_start();
require VIEWPATH.$controller->path;
$content = ob_get_clean();
require SRCPATH.'view.php';
