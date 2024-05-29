<?php

namespace app\router;

class Router
{
    private $routes = [];

    public function add($method, $path, $callable, $callableJson)
    {
        $this->routes[] = [$method, $path, $callable, $callableJson];
    }

    public function match($requestMethod, $requestPath)
    {
        $this->removeLastSlash($requestPath);
        $url = explode('/', $_SERVER['REQUEST_URI'])[1];

        preg_match("/\/{$url}\/(\d+)/", $requestPath, $matches2);
        $id = '';
        if ($matches2) {
            $id = $matches2[1];
        }
        foreach ($this->routes as $route) {
            if ($matches2) {
                $string_modificada = str_replace("{id}", $id, $route[1]);
                $route[1] =  $string_modificada;
            }
            if ($route[0] === $requestMethod && $this->matchPath($route[1], $requestPath)) {
                $list = explode('@', $route[2]);
                $action = $list[1];
                $className = "app\\controllers\\" . $list[0];
                $controller = new $className();
                if ($route[3]) {
                    header('Content-Type: application/json');
                    echo json_encode($controller->$action($id));
                } else {
                    $controller->$action($id);
                }
                return true;
            }
        }
        return false;
    }

    private function matchPath($pattern, $path)
    {
        $pattern = preg_replace('/\{(.*?)\}/', '(?P<$1>.+)', $pattern);
        return preg_match('/^' . preg_quote($pattern, '/') . '$/', $path);
    }
    private function removeLastSlash($url)
    {
        if (substr($url, -1) === "/") {
            $url = substr($url, 0, -1);
            header("Location: {$url}");
        }
    }
}
