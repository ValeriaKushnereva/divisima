<?php
//как только роутер отработал, он передает действие к контролеру
namespace app\core;
//use app\models\Main; пространство имен - слеш  в другу сторону 

// use app\core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct($route)
    {
        // debug($route);
        //echo 'CONTROLLER';
        $this->route = $route;
        // echo 'CONTROLLER';
        // echo $route;
        $this->view = new View($route);
        $model_name = "\app\models\\" . ucfirst($route['controller']);
        if (class_exists($model_name)){
            $this->model = new $model_name;
        }
        //echo $model_name;
    }
}