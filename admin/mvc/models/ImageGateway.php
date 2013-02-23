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
        $query_result = $this->query('select * from images where id='.$id);       
        return $this->getSingle($query_result);
    }
    
    public function findByName($name){
        $query_result = $this->query('select * from images where name=\''.trim($name).'\'');          
        return $this->getSingle($query_result);
    }
    
    public function findBySEOName($seoname){
        $query_result = $this->query('select * from images where seoname='.trim($seoname));       
        return $this->getSingle($query_result);
    }
    
    public function findByGallery($gallery_id){
        $query_result = $this->query('select * from images where gallery='.$gallery_id);       
        return $this->getMatrix($query_result);
    }
    
    public function getIDs() {
        $query_result = $this->query('select id from images');       
        return $this->getVector($query_result);
    }
    
    public function getAll() {
        $query_result = $this->query('select * from images');       
        return $this->getMatrix($query_result);
    }
}

?>
