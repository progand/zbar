<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';


class SlideShowCommand extends BaseCommand
{

    public function process()
    {
        $gallery_id = $_REQUEST["parameter"];
        $module = new ImageModule();
        $images = $module->getImagesInGallery($gallery_id);
        $gateway = new GalleryGateway();
        $gallery = $gateway->find($gallery_id);
        include_once $_SERVER['DOCUMENT_ROOT'].'/mvc/views/slideshow.php';
    }

}
