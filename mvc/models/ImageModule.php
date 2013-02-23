<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImageModule
 *
 * @author user
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/ImageGateway.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/models/GalleryGateway.php';

class ImageModule {    

    public function getImagesInGallery($gallery_id) {
        $galleryGateway = new GalleryGateway();
        $gallery = $galleryGateway->find($gallery_id);

        $spath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['smalldir'];
        $mpath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['mediumdir'];
        $bpath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['bigdir'];

        $imageGateway = new ImageGateway();
        $result_array = $imageGateway->findByGallery($gallery_id);

        for ($index = 0; $index < count($result_array); $index++) {
            $image = $result_array[$index];
            $image['bigFile'] = $bpath . $image['filename'];
            $image['mediumFile'] = $mpath . $image['filename'];
            $image['smallFile'] = $spath . $image['filename'];
            $result_array[$index] = $image;
        }
        return $result_array;
    }

    public function getRandomImagesInGallery($gallery_id, $limit = 0) {
        $allImages = $this->getImagesInGallery($gallery_id);
        $images = array();

        $size = count($allImages);
        if (!$size) {
            return $images;
        }

        if ($limit == 0) {
            $limit = $size;
        }

        $i = 0;
        while ($i < $limit) {
            $nextID = rand(0, $size - 1);
            if (key_exists($nextID, $images)) {
                continue;
            } else {
                $images[$nextID] = $allImages[$nextID];
            }
            $i++;
        }
        return $images;
    }

    public function getRandomImages($limit = 0) {
        $imageGateway = new ImageGateway();
        $allImages = $imageGateway->getAll();
        $images = array();

        $size = count($allImages);
        if (!$size) {
            return $images;
        }

        if ($limit == 0) {
            $limit = $size;
        }

        $i = 0;
        while ($i < $limit) {
            $nextID = rand(0, $size - 1);
            if (key_exists($nextID, $images)) {
                continue;
            } else {
                $images[$nextID] = $this->getImage($allImages[$nextID]["id"]);
            }
            $i++;
        }

        return $images;
    }

    public function getImage($image_id) {
        $imageGateway = new ImageGateway();
        $image = $imageGateway->find($image_id);
        $galleryGateway = new GalleryGateway();
        $gallery = $galleryGateway->find($image["gallery"]);

        $spath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['smalldir'];
        $mpath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['mediumdir'];
        $bpath = HOST_URI . "galleries/" . $gallery['path'] . $gallery['bigdir'];

        $resultImage = $image;
        $resultImage['bigFile'] = $bpath . $image['filename'];
        $resultImage['mediumFile'] = $mpath . $image['filename'];
        $resultImage['smallFile'] = $spath . $image['filename'];

        return $resultImage;
    }

}

?>
