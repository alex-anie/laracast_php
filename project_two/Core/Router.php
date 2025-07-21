<?php

    namespace Core;

use Core\middleware\Auth;
use Core\middleware\Guest;
use Core\Middleware\Middleware;

    class Router {

        protected $routes = [];

        public function add($method, $url, $controller){
            $this->routes[] = [
                'uri' => $url,
                'controller' => $controller,
                'method' => $method,
                'middleware' => null
            ];

            return $this;
        }

        public function get($url, $controller){
            return $this->add('GET', $url, $controller);
        }

        public function post($url, $controller){
            return $this->add('POST', $url, $controller);
        }

        public function delete($url, $controller){
            return $this->add('DELETE', $url, $controller);
        }

        public function patch($url, $controller){
            return $this->add('PATCH', $url, $controller);
        }

        public function put($url, $controller){
            return $this->add('PUT', $url, $controller);
        }

        public function only($key){
            $this->routes[array_key_last($this->routes)]['middleware'] = $key;
            return $this;
        }

        public function route($url, $method){
            foreach($this->routes as $route){
                if($route['uri'] === $url && $route['method'] === strtoupper($method)){
                    Middleware::resolve($route['middleware']);

                    return require base_path($route['controller']);
                }
            }

            $this->abort();
        }

        public function abort($code = 404){
            http_response_code($code);
            require base_path("views/{$code}.php");

            die();
        }
    }
