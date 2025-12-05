<?php

class Router {
    private $routes = [
        "GET" => [],
        "POST" => []
    ];

    public function get($path, $callback) {
        $this->routes["GET"][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes["POST"][$path] = $callback;
    }

    public function run() {
        $requestUri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        // Ambil path tanpa query (?xxx)
        $path = parse_url($requestUri, PHP_URL_PATH);

        // Jika root
        if ($path === "" || $path === false) {
            $path = "/";
        }

        // Debug (jika ingin cek)
        // echo "Current Path: " . $path;

        // Cocokkan route
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];

            if (is_array($callback)) {
                $controller = new $callback[0];
                return $controller->{$callback[1]}();
            }

            return call_user_func($callback);
        }

        // 404
        http_response_code(404);
        echo "<h1 style='font-family:Arial;padding:20px'>404 - Page Not Found</h1>";
        exit;
    }
}
