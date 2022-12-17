<?php
namespace app\core; //путь к файлу Router.php относительно корня проекта

class Router 
{
    public $routes = [];
    public $params = [];

    public function __construct()
    {
        $routes_arr = require_once "app/config/routes.php";
        foreach ($routes_arr as $route => $params) {
            $this -> add($route, $params);
        }
    }

    public function add($route, $params) 
    { 
        $route = '#^' . $route . '$#';
        $this -> routes[$route] = $params;
        debug($this->routes); 
    }

    public function match()
    {

    }
    
    public function run() 
    {
        if ($this -> match()) {

        } else {
            echo 'Страница не найдена(404)';
        }
    }
}

?>
