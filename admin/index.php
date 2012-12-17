<?php
header('Content-Type: text/html; charset=windows-1251');

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/mvc/controllers/FrontController.php';

$frontController = new FrontController();
$frontController->dispatch();

?>