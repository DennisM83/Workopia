<?php

class Router {
    protected $routes = [];

    /**
     * Register the route
     *
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function registerRoute($method, $uri, $controller) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
        ];
    }

    /**
     * Add a GET method
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */

     public function get($uri, $controller) {
        $this->registerRoute('GET', $uri, $controller);
     }

     /**
     * Add a POST method
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */

     public function post($uri, $controller) {
        $this->registerRoute('POST', $uri, $controller);
     }

     /**
     * Add a PUT method
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */

     public function put($uri, $controller) {
        $this->registerRoute('PUT', $uri, $controller);
     }

     /**
     * Add a DELETE method
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */

     public function delete($uri, $controller) {
        $this->registerRoute('DELETE', $uri, $controller);
     }

     /**
      * Load error page
      * @param int $httpCode
      * @return void
      */

      public function error($httpCode = 404) {
        http_response_code($httpCode);
        loadView("error/{$httpCode}");
        exit;
      }

     /**
      * Route the request
      *
      * @param string $uri
      * @param string $method
      * @return void
      */

      public function route($uri, $method) {
        foreach($this->routes as $route) {
            if($route['uri'] === $uri && $route['method'] === $method) {
                require basePath($route['controller']);
                return;
            }
        }

        $this->error();
      }
};