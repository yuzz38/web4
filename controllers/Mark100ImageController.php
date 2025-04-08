<?php
require_once "Mark100Controller.php"; 

class Mark100ImageController extends Mark100Controller {
    public $template = "mark_image.twig";
    public function getContext() : array
    {
        $context = parent::getContext(); 
        $context['image'] = "/images/mark100.jpg";

        return $context;
    }
}