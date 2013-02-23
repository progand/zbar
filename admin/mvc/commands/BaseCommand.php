<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/mvc/commands/FrontCommand.php';

class BaseCommand implements FrontCommand {

    public $smarty;

    public function __construct() {
        $this->smarty = new MySmarty();
    }

    public function process() {
        $class = get_class();
        if ($_REQUEST["action"]) {
            $action = $_REQUEST["action"];
        } else {
            $action = "index";
        }
        $action="admin_".$action;
        $this->smarty->display("$action.tpl");
    }
}