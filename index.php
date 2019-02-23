<?php
header('Content-Type: text/html; charset=UTF-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/controllers/FrontController.php';
$frontController = new FrontController();
$frontController->dispatch();

?>
