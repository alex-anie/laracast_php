<?php

    namespace Core;

    class Router {

        protected $routes = [];

        public function add($method, $url, $controller){
            $this->routes[] = [
                'uri' => $url,
                'controller' => $controller,
                'method' => $method
            ];
        }

        public function get($url, $controller){
            $this->add('GET', $url, $controller);
        }

        public function post($url, $controller){
            $this->add('POST', $url, $controller);
        }

        public function delete($url, $controller){
            $this->add('DELETE', $url, $controller);
        }

        public function patch($url, $controller){
            $this->add('PATCH', $url, $controller);
        }

        public function put($url, $controller){
            $this->add('PUT', $url, $controller);
        }

        public function route($url, $method){
            foreach($this->routes as $route){
                if($route['uri'] === $url && $route['method'] === strtoupper($method)){
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
