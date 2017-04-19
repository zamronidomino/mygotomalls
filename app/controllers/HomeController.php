<?php namespace Gotomalls\Controllers;

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
    public function indexAction() {
        $this->view->appName = $this->config->appName;
    }

    public function error404Action() {
       $this->view->appName = $this->config->appName;
    }
}