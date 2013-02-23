<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageModule.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';

class APICommand extends BaseCommand {

    public function process() {
        $galleryGateway = new GalleryGateway();
        $imageModule = new ImageModule();
        if (array_key_exists("get", $_REQUEST)) {
            if ($_REQUEST["get"] == "galleries") {
                echo json_encode($galleryGateway->getAll());
            }elseif($_REQUEST["get"] == "gallery"){
                if(array_key_exists("id", $_REQUEST)){
                    $id = $_REQUEST['id'];
                    if(!is_numeric($id)){
                        echo json_encode(array("Error" => "Parameter 'id' is not numeric"));
                    }else{
                        $gallery = $galleryGateway->find($id);
                        if($gallery){
                            echo json_encode($gallery);
                        }else{
                            echo json_encode(array("Error" => "Gallery with id=".$id." not found"));
                        }
                    }                    
                }else{
                    echo json_encode(array("Error" => "Need parameter 'id'"));
                }
            }elseif ($_REQUEST["get"] == "images") {
                if(array_key_exists("gallery", $_REQUEST)){
                    $gallery = $_REQUEST['gallery'];
                    if(!is_numeric($gallery)){
                        echo json_encode(array("Error" => "Parameter 'gallery' is not numeric"));
                    }else{
                        $images = $imageModule->getImagesInGallery($gallery);
                        if($images){
                            echo json_encode($images);
                        }else{
                            echo json_encode(array("Error" => "Images of gallery with id=".$gallery." not found"));
                        }
                    }
                }else{
                    echo json_encode(array("Error" => "Need parameter 'gallery'"));
                }                
            }elseif($_REQUEST["get"] == "image"){
                if(array_key_exists("id", $_REQUEST)){
                    $id = $_REQUEST['id'];
                    if(!is_numeric($id)){
                        echo json_encode(array("Error" => "Parameter 'id' is not numeric"));
                    }else{
                        $image = $imageModule->getImage($id);
                        if($image){
                            echo json_encode($image);
                        }else{
                            echo json_encode(array("Error" => "Image with id=".$id." not found"));
                        }
                    }                    
                }else{
                    echo json_encode(array("Error" => "Need parameter 'id'"));
                }
            }else {
                echo json_encode(array("Error" => "Unknown parameter 'get'"));
            }
        } else {
            echo json_encode(array("Status" => "Ok"));
        }
    }

}

