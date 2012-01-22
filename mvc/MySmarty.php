<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/Smarty.class.php';

class MySmarty extends Smarty
{

    public function __construct()
    {
        $this->Smarty();
        $this->template_dir = $_SERVER['DOCUMENT_ROOT'] . "/templates/";
        $this->compile_dir = $_SERVER['DOCUMENT_ROOT'] . "/templates_c/";
        $this->caching = false; //FALSE - for development, TRUE - for release
    }

}