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
        $query_result = $this->query('select * from galleries where id='.$id);       
        return $this->getSingle($query_result);
    }
    
    public function findByName($name){
        $query_result = $this->query('select * from galleries where name=\''.trim($name).'\'');          
        return $this->getSingle($query_result);
    }
    
    public function findBySEOName($seoname){
        $query_result = $this->query('select * from galleries where seoname='.trim($seoname));       
        return $this->getSingle($query_result);
    }
    
    public function getIDs() {
        $query_result = $this->query('select id from galleries');       
        return $this->getVector($query_result);
    }
    
    public function getAll() {
        $query_result = $this->query('select * from galleries');       
        return $this->getMatrix($query_result);
    }
}

?>
