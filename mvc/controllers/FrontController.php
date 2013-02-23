<?php

header('Content-Type: text/html; charset=cp-1251');
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/IndexCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/ContactsCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/GalleryCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/ImageCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/SlideShowCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/ReportsCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/APICommand.php';

class FrontController {

    public function dispatch() {

        $command = new IndexCommand();
        if (array_key_exists("action", $_REQUEST)) {

            switch ($_REQUEST["action"]) {
                case "gallery":
                    $command = new GalleryCommand();
                    break;
                case "image":
                    $command = new ImageCommand();
                    break;                
                case "slideshow":
                    $command = new SlideShowCommand();
                    break;    
                case "api":
                    $command = new APICommand();
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
