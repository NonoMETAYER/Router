<?php
require 'vendor/autoload.php';
$router = new src\Router\AltoRouter();

//* EXEMPLE

//router index
$router->map('GET', '/', 'index', 'index');

// router order 
$router->map('GET','/order/[i:id]', 'order', 'order');

//router error
$router->map('GET', '/404', '404', '404');

$match = $router->match();

if(is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        require "public/{$match['target']}.php";
    }
} else {
    require "public/404/index.php";
}