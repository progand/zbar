<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';


class GalleryCommand extends BaseCommand
{

    public function process()
    {
       
        $gallery_id = $_REQUEST["parameter"];
        $module = new ImageModule();
        $images = $module->getImagesInGallery($gallery_id);
        $gateway = new GalleryGateway();
        $gallery = $gateway->find($gallery_id);
        $this->smarty->assign("gallery",$gallery);
        $this->smarty->assign("images",$images);
        $this->smarty->display("gallery.tpl");
    }    

}