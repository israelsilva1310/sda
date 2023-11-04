<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {

        $builder->connect('/', ['controller' => 'Dashboard', 'action' => 'index']);
        $builder->connect('/horarios', ['controller' => 'Schedules', 'action' => 'index']);
        $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
        $builder->connect('/professores', ['controller' => 'Teachers', 'action' => 'index']);
        $builder->connect('/disciplinas', ['controller' => 'Disciplines', 'action' => 'index']);
        $builder->connect('/salas', ['controller' => 'Rooms', 'action' => 'index']);
        $builder->connect('/cursos', ['controller' => 'Courses', 'action' => 'index']);
        $builder->connect('/ferramentas', ['prefix' => 'tools', 'controller' => 'Systems', 'action' => 'tools']);
        //$builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });

    $routes->prefix('admin', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Dashboard', 'action' => 'index']);

        //$builder->connect('/admin/*', 'index');
        $builder->fallbacks();
    });
    $routes->prefix('tools', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Systems', 'action' => 'index']);
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder) {
     *     // No $builder->applyMiddleware() here.
     *
     *     // $builder->setExtensions(['json', 'xml']);
     *     // Parse specified extensions from URLs
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
