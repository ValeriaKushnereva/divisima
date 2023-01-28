<?php 
    include "app/lib/debug.php";
    include "app/config/pathes.php";
    use app\core\Router; //(в роутер должно быть нейм спэйс)

    spl_autoload_register(function($class) {
        $class = str_replace('\\', '/', $class);
        require_once "{$class}.php";
    });

    $router = new Router('HELLO');
    $router->run();

?>