<?php
require_once "TwigBaseController.php"; 

class Mark90Controller extends TwigBaseController {
    public $template = "__object.twig";
    public $title = "JSX90";
    public function getContext() : array
    {
        $context = parent::getContext(); // вызываем родительский метод
        $context['title'] = $this->title; // добавляем title в контекст

        return $context;
    }
}