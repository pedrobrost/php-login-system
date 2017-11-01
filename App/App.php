<?php

namespace App;

use Core\Router;

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
        $this->router->addRoute();
    }

}
