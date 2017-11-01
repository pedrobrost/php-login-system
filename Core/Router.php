<?php

namespace Core;

class Router
{

    private $routes = [];

    public function addRoute($route)
    {
        $this->routes[] = $route;
    }

    public function dispatch($url)
    {
        $route = $this->findRoute($url);

        if (!is_null($route)){
            $controller = $this->getController($route->getController());
            $action = $this->getAction($route->getAction());
            $controller->$action();
        } else {
            echo "La ruta no fue encontrada";
        }
    }

    private function findRoute($url)
    {
        foreach ($this->routes as $route){
            if ($route->getPath() == $url)
                return $route;
        }
        return null;
    }

    private function getController($controllerName)
    {
        $controllerName = "\\App\\Controller\\" . ucfirst($controllerName) . "Controller";
        return new $controllerName();
    }

    private function getAction($actionName)
    {
        return $actionName . "Action";
    }

}
