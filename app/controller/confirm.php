<?php

$controller = new PageController();

if ($response->error_flag === true) {
    $controller->set_view_page('index');
    $controller->set_next_page('confirm');
} else {
    $controller->set_view_page('confirm');
    $controller->set_next_page('register');
}

return $controller;
