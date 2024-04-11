<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {

        $builder->connect('/', ['controller' => 'Welcome', 'action' => 'index']);
        $builder->connect('/restricao', ['prefix' => 'ghif', 'controller' => 'Gestor']);
        $builder->connect('/cadastrar', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'add']);
        $builder->connect('/login', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']);
        $builder->connect('/users', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
        $builder->connect('/usuarios', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
        $builder->connect('/users/login', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']);
        $builder->connect('/horarios', ['controller' => 'Schedules', 'action' => 'index']);
        $builder->connect('/horarios/add', ['controller' => 'Schedules', 'action' => 'add']);
        $builder->connect('logout', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout']);

        $builder->connect('/professores', ['controller' => 'Teachers', 'action' => 'index']);
        $builder->connect('/professores/gerarpdf', ['controller' => 'Teachers', 'action' => 'print']);

        $builder->connect('/disciplinas', ['controller' => 'Disciplines', 'action' => 'index']);
        $builder->connect('/salas', ['controller' => 'Rooms', 'action' => 'index']);
        $builder->connect('/cursos', ['controller' => 'Courses', 'action' => 'index']);
        $builder->connect('/ferramentas', ['prefix' => 'tools', 'controller' => 'Systems', 'action' => 'tools']);
        //$builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });

    $routes->prefix('admin', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Dashadm', 'action' => 'index']);
        $builder->connect('/dashboard', ['controller' => 'Dashadm', 'action' => 'index']);
        $builder->connect('/modulos', ['controller' => 'Modules', 'action' => 'index']);
        $builder->connect('/horarios', ['prefix' => false, 'controller' => 'Schedules', 'action' => 'index']);
        $builder->connect('/configs', ['controller' => 'configurations', 'action' => 'edit', 1]);
        $builder->connect('/parametros', ['controller' => 'configurations', 'action' => 'parameters', 1]);

        //$builder->connect('/admin/*', 'index');
        $builder->fallbacks();
    });
    $routes->prefix('tools', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Systems', 'action' => 'index']);
        $builder->connect('/ferramentas', ['controller' => 'Systems', 'action' => 'index']);

        $builder->fallbacks();
    });
    $routes->prefix('School', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Welcome', 'action' => 'index']);
        $builder->connect('/users/login', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']);

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
