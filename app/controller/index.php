<?php

$controller = new PageController();
$controller->set_view_page('index');
$controller->set_next_page('confirm');

return $controller;
