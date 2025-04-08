<?php
require_once "Mark90Controller.php"; 

class Mark90InfoController extends Mark90Controller {
    public $template = "mark90_info.twig";
    public function getContext() : array
    {
        $context = parent::getContext(); 

        return $context;
    }
}