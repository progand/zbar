<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryGateway
 *
 * @author user
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/mvc/models/Gateway.php';

class ImageGateway extends Gateway{

    public function find($id){
        return $this->getByKey('id', $id, 'images');
    }

    public function findByName($name){
        $n = trim($name);
        return $this->getByKey('name', $n, 'images');
    }

    public function findBySEOName($seoname){
        $sn = trim($seoname);
        return $this->getByKey('seoname', $sn, 'images');
    }

    public function findByGallery($gallery_id){
      $images = array();
      foreach($this->getAll() as $image){
        if ($image['gallery'] == $gallery_id){
            $images[] = $image; 
        }
      }
      return $images;
    }

    public function getIDs($type = 'images') {
        return $this->getIDs($type);
    }

    public function getAll($type = 'images') {
        return $this->getCollection($type);
    }
}

?>
