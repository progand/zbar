<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/mvc/commands/BaseCommand.php';

class FrontController {

    public function dispatch() {

        $command = new BaseCommand();
        if (array_key_exists("action", $_REQUEST)) {

            switch ($_REQUEST["action"]) {                      
                case "index":
                    $command = new BaseCommand();
                    break;                
                default:
                    $command = new BaseCommand();
                    break;
            }
        } else {
            $command = new BaseCommand();
        }

        $command->process();
    }

}

?>
