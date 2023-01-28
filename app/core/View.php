<?php
namespace app\core;

class View 
{
    public $route;
    public $view;
    public $layout = 'default';
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = 'app/views/' . $route['controller'] . '/index.php';
        $this->render();
    }
    public function render()
    {
        $layout = 'app/views/layouts/' . $this->layout . '.php';
        if (file_exists($this->view)) {
            ob_start(); //буферизация. чтобы отложить подключение чего-либо
            require_once $this->view;
            $content = ob_get_clean(); //отключить буферизацию
        }

        if(file_exists($layout)) {
            require_once $layout;
        }
        
    }
}