<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/FrontCommand.php';

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
        $this->smarty->display("$action.tpl");
    }
}