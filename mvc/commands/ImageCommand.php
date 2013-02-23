<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageGateway.php';

class ImageCommand extends BaseCommand
{

    public function process()
    {        
        $image_id = $_REQUEST["parameter"];
        $imageModule = new ImageModule();
        $image = $imageModule->getImage($image_id);
        $galleryGateway = new GalleryGateway();
        $gallery = $galleryGateway->find($image["gallery"]);  
        $otherGalleryImages = $imageModule->getRandomImagesInGallery($gallery["id"], 4);
        $otherImages = $imageModule->getRandomImages(5);
        $this->smarty->assign("gallery",$gallery);
        $this->smarty->assign("image",$image);
        $this->smarty->assign("otherGalleryImages",$otherGalleryImages);
        $this->smarty->assign("otherImages",$otherImages);
        $this->smarty->display("image.tpl");
      
    }    

}
