<?php
require_once "Mark90Controller.php"; 

class Mark90ImageController extends Mark90Controller {
    public $template = "mark_image.twig";
    public function getContext() : array
    {
        $context = parent::getContext(); 
        $context['image'] = "/images/mark90.png";

        return $context;
    }
}