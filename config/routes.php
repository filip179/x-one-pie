<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::scope('/', function (RouteBuilder $routes) {
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));
    $routes->applyMiddleware('csrf');

    $routes->get('/', ['controller' => 'Dashboard', 'action' => 'index']);
    $routes->get('/settings', ['controller' => 'Invoice', 'action' => 'index']);
    $routes->get('/invoice', ['controller' => 'Invoice', 'action' => 'index']);
    $routes->connect('/invoice/create', ['controller' => 'Invoice', 'action' => 'add']);
    $routes->connect('/invoice/delete/:id', ['controller' => 'Invoice', 'action' => 'delete']);
    $routes->connect('/invoice/edit/:id', ['controller' => 'Invoice', 'action' => 'edit']);
    $routes->get('/invoice/:id', ['controller' => 'Invoice', 'action' => 'view']);
    $routes->get('/invoice/data-table', ['controller' => 'Invoice', 'action' => 'list']);
});

