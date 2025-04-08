<?php
require_once "Mark100Controller.php"; 

class Mark100InfoController extends Mark100Controller {
    public $template = "mark100_info.twig";
    public function getContext() : array
    {
        $context = parent::getContext(); 

        return $context;
    }
}