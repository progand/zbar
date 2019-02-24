<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';

class GalleryCommand extends BaseCommand {

    public function process() {

        $gallery_id = $_REQUEST["parameter"];
        $this->checkNumberParameter($gallery_id);
        $module = new ImageModule();
        $images = $module->getImagesInGallery($gallery_id);
        $gateway = new GalleryGateway();
        $gallery = $gateway->find($gallery_id);
        if ($gallery) {
            include_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/views/gallery.php";
        } else {
            $this->error404();
        }
    }

}
