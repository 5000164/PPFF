<?php

$controller = new PageController();

if ($response->error_flag === true) {
    $controller->set_view_page('index');
    $controller->set_next_page('confirm');
} else {
    $controller->redirect('finish');
}

return $controller;
