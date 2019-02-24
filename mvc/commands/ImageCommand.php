<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageGateway.php';

class ImageCommand extends BaseCommand {

    public function process() {
        $image_id = $_REQUEST["parameter"];
        $this->checkNumberParameter($image_id);
        $imageModule = new ImageModule();
        $image = $imageModule->getImage($image_id);
        if ($image) {
            $galleryGateway = new GalleryGateway();
            $gallery = $galleryGateway->find($image["gallery"]);
            $otherGalleryImages = $imageModule->getRandomImagesInGallery($gallery["id"], 4);
            $otherImages = $imageModule->getRandomImages(5);
            include_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/views/image.php";
        } else {
            $this->error404();
        }
    }

}
