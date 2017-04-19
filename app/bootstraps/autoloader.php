<?php

use Phalcon\Loader;

require _VENDOR_DIR_ . 'autoload.php';
require _HELPERS_DIR_ . 'helpers.php';

// Register an autoloader
$loader = new Loader();
$loader->registerDirs([
    _APP_DIR_ . 'controllers' . DIRECTORY_SEPARATOR,
    _APP_DIR_ . 'models' . DIRECTORY_SEPARATOR,
    _APP_DIR_ . 'libs' . DIRECTORY_SEPARATOR
]);
$loader->registerNamespaces([
    'Gotomalls\Controllers' => _APP_DIR_ . 'controllers' . DIRECTORY_SEPARATOR,
    'Gotomalls\Models' => _APP_DIR_ . 'models' . DIRECTORY_SEPARATOR,
    'Gotomalls\Api' => _APP_DIR_ . 'libs' . DIRECTORY_SEPARATOR . 'GotomallsApi' . DIRECTORY_SEPARATOR
]);
$loader->register();

$dotenv = new Dotenv\Dotenv(_ROOT_DIR_);
$dotenv->load();

return $loader;