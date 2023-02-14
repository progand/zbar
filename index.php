<?php
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
header('Content-Type: text/html; charset=UTF-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/controllers/FrontController.php';
$frontController = new FrontController();
$frontController->dispatch();

?>
