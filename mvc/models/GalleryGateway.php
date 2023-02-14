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

class GalleryGateway extends Gateway{

    public function find($id){
        return $this->getByKey('id', $id, 'galleries');
    }

    public function findByName($name){
        $n = trim($name);
        return $this->getByKey('name', $n, 'galleries');
    }

    public function findBySEOName($seoname){
        $sn = trim($seoname);
        return $this->getByKey('seoname', $sn, 'galleries');
    }

    public function getIDs($type = 'galleries') {
        return $this->getIDs($type);
    }

    public function getAll($type = 'galleries') {
        return $this->getCollection($type);
    }
}

?>
