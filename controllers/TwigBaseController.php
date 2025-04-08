<?php
require_once "BaseController.php"; 

class TwigBaseController extends BaseController {
    public $title = ""; // название страницы
    public $template = "";
    public $url = "";
    public $menu = [ 
        [
            "title" => "Главная",
            "url" => "/",
        ],
        [
            "title" => "JSX90",
            "url" => "/mark90",
        ],
        [
            "title" => "JSX100",
            "url" => "/mark100",
        ]
    ];
    public $submenu = [ 
        [
            "name" => "Картинка",
            "url" => "/image",
        ],
        [
            "name" => "Описание",
            "url" => "/info",
        ]
    ];
    protected \Twig\Environment $twig; // ссылка на экземпляр twig, для рендернига
    

    public function __construct($twig)
    {
        $this->twig = $twig; // пробрасываем его внутрь
        $this->url = $_SERVER['REQUEST_URI'] ?? '/';
    }
    
    // переопределяем функцию контекста
    public function getContext() : array
    {
        $context = parent::getContext(); // вызываем родительский метод
        $context['title'] = $this->title; // добавляем title в контекст
        $context['menu'] = $this->menu;
        $context['submenu'] = $this->submenu;
        $context['current_url'] = $this->url;
        return $context;
    }
    
    // функция гет, рендерит результат используя $template в качестве шаблона
    // и вызывает функцию getContext для формирования словаря контекста
    public function get() {
        echo $this->twig->render($this->template, $this->getContext());
    }
}