<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/FrontCommand.php';

class BaseCommand implements FrontCommand {

    public $smarty;

    public function __construct() {
        $this->smarty = new MySmarty();
    }

    private $actions = array(
        "index", "abouts", "contacts", "reports", "articles", "video",
        "aivazovsky","aivazovsky_seascape","art20","early_shevchenko_portrait",
        "kartina_trutovskogo_taras_shevchenko","oil_painting","technique_acrylic_painting",
        "video","video_aivazovsky","video_seascape"
    );

    public function process() {
        if ($_REQUEST["action"] && in_array($_REQUEST["action"], $this->actions)) {
            $action = $_REQUEST["action"];
        } else {
            $action = "index";
        }
        $this->smarty->display("$action.tpl");
    }

}