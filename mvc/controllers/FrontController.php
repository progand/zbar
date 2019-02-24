<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/GalleryCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/ImageCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/SlideShowCommand.php';

class FrontController {

    public function dispatch() {

        $command = new BaseCommand();
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
