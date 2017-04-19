<?php

use Phalcon\Mvc\Application;

try {
    define('_ROOT_DIR_', dirname(__DIR__) . DIRECTORY_SEPARATOR);
    define('_PUBLIC_DIR_', __DIR__ . DIRECTORY_SEPARATOR);
    define('_APP_DIR_', _ROOT_DIR_. 'app' . DIRECTORY_SEPARATOR);
    define('_VENDOR_DIR_', _ROOT_DIR_. 'vendor' . DIRECTORY_SEPARATOR);
    define('_STORAGES_DIR_', _ROOT_DIR_ . 'storages' . DIRECTORY_SEPARATOR);
    define('_BOOTSTRAPS_DIR_', _APP_DIR_ . 'bootstraps' . DIRECTORY_SEPARATOR);
    define('_CONFIGS_DIR_', _APP_DIR_ . 'configs' . DIRECTORY_SEPARATOR);
    define('_VIEWS_DIR_', _APP_DIR_ . 'views' . DIRECTORY_SEPARATOR);
    define('_HELPERS_DIR_', _APP_DIR_ . 'helpers' . DIRECTORY_SEPARATOR);
    define('_ROUTES_DIR_', _APP_DIR_ . 'routes' . DIRECTORY_SEPARATOR);
    define('_LOGS_DIR_', _STORAGES_DIR_ . 'logs' . DIRECTORY_SEPARATOR);
    define('_CACHE_DIR_', _STORAGES_DIR_ . 'caches' . DIRECTORY_SEPARATOR);

    $loader = require(_BOOTSTRAPS_DIR_ . 'autoloader.php');
    $dependencyInjector = require(_BOOTSTRAPS_DIR_ . 'di.php');

    // Handle the request
    $application = new Application($dependencyInjector);
    echo $application->handle()->getContent();
} catch (\Exception $e) {
    $dependencyInjector->get('logger')->critical('Exception: '. $e->getMessage() . ' in file:'.$e->getFile().' line:'.$e->getLine());
}