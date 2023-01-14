<?php
namespace app\core;
//use app\models\Main;

// use app\core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct($route)
    {
        // debug($route);
        echo 'CONTROLLER';
        $this->route = $route;
        // echo 'CONTROLLER';
        // echo $route;
        $this->view = new View($route);

        $this->model = new();
    }
}