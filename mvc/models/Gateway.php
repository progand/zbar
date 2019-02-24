<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gateway
 *
 * @author user
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

abstract class Gateway {
    private $data;

    public function __construct() {
      $galleriesEncoded = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/db/galleries.json");
      $this->$data['galleries'] = json_decode($galleriesEncoded, true);
      $imagesEncoded = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/db/images.json");
      $this->$data['images'] = json_decode($imagesEncoded, true);

    }

    protected function getCollection($type){
      if(!$type){
        return null;
      }
      return $this->$data[$type];
    }

    protected function getByKey($key, $value, $type){
      $collection = $this->getCollection($type);
      if(!$collection){
        return null;
      }
      $index = array_search($value, array_column($collection, $key));
      return $collection[$index];
    }

    protected function getIDs($type){
      $collection = $this->getCollection($type);
      return array_keys($collection);
    }
}

?>
