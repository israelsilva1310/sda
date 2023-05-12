<?php
require __DIR__ . "./vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(CONF_URL_TEST);

/**
 * App
 */
$router->namespace("Source\Controllers");

/**
 * Web
 * home
 */
$router->group(null);
$router->get("/", "WebController:home");

$router->get("/contato", "WebController:contact");

/**
 * ERROS
 */
$router->group("ooops");
$router->get("/{errcode}", "WebController:error");


/**
 * DISPATCH
 */
$router->dispatch();
if ($router->dispatch()) {
    $router->redirect("/ooops/{$router->error()}");
}
var_dump($router);