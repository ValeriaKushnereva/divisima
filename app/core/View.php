<?php
namespace app\core;

class View 
{
    public $route;
    public function __construct($route)
    {
        $this->route = $route;
    }
}