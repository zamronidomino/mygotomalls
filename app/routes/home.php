<?php

//home route
$router->add('/', array(
        'namespace' => 'Gotomalls\\Controllers',
        'controller' => 'home',
        'action' => 'index'));

// Set 404 paths
$router->notFound(array(
            'namespace' => 'Gotomalls\\Controllers',
            'controller' => 'home',
            'action'     => 'error404'));
