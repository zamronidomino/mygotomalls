<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Http\Request;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Logger;
use Phalcon\Logger\Adapter\File as FileAdapter;
use Phalcon\Config;
use Phalcon\Mvc\Router;

// Create a Dependency Injection instance
$di = new FactoryDefault();

/*
|--------------------------------------------------------------------------
| Register url utility
|--------------------------------------------------------------------------
*/
$di->set('url', function () {
    $url = new UrlProvider();
    $url->setBaseUri('/');
    return $url;
});

/*
|--------------------------------------------------------------------------
| Register application configuration
|--------------------------------------------------------------------------
*/
$di->set('config', function () {
    $configData = require(_CONFIGS_DIR_ . 'app.php');
    return new Config($configData);
});

/*
|--------------------------------------------------------------------------
| Register database service
|--------------------------------------------------------------------------
*/
$di->set('db', function () use($di) {
    $config = $di->get('config');
    return new DbAdapter([
                  'host' => $config->db->host,
                  'dbname' => $config->db->dbname,
                  'username' => $config->db->username,
                  'password' => $config->db->password
                  ]);
});

/*
|--------------------------------------------------------------------------
| Add routing capabilities
|--------------------------------------------------------------------------
|
| register all routes from app/routes directory
|
*/
$di->set('router', function() {
    //Create the router without default routing (false)
    //so we will only match routes that we defined
    $router = new Router(false);
    $iterator = new DirectoryIterator(_ROUTES_DIR_);
    foreach ($iterator as $route) {
        $isDotFile = strpos($route->getFilename(), '.') === 0;

        if (!$isDotFile && !$route->isDir()) {
            require _ROUTES_DIR_ . $route->getFilename();
        }
    }
    return $router;
});

/*
|--------------------------------------------------------------------------
| Initialize view
|--------------------------------------------------------------------------
|
| register view directories
|
*/
$di->set('view', function() use($di) {
    $config = $di->get('config');
    $view = new View();
    $view->setViewsDir(_VIEWS_DIR_ . $config->theme);
    return $view;
});

/*
|--------------------------------------------------------------------------
| Register logging utility
|--------------------------------------------------------------------------
*/
$di->set('logger', function() {
    return new FileAdapter(_LOGS_DIR_ . 'app.log');
});

return $di;