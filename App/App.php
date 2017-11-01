<?php

namespace App;

use Core\Router;
use Core\Route;

class App
{

    private $router;

    public function __construct()
    {
        $this->router = new Router();
        $this->loadRoutes();
    }

    public function handle($url)
    {
        $this->router->dispatch($url);
    }

    private function loadRoutes()
    {
        $this->router->addRoute(new Route('/', 'home', 'show'));
    }

}
