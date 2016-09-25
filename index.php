<?php

require_once 'controller/homeController.php';
require_once 'controller/sliderController.php';

$controller = new homeController();

$controller->handleRequest();
$controller = new sliderController();

$controller->handleRequest();

?>