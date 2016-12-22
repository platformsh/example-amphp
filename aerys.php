<?php

use Aerys\Host;
use Aerys\Router;
use Kelunik\Demo\Chat;
use function Aerys\root;
use function Aerys\websocket;

// route /ws to the websocket endpoint
// you can add more routes to this router
$router = (new Router())
    ->route("GET", "ws", websocket(new Chat));

// add document root
$root = root(__DIR__ . "/public");

// Get the port from the environment.
$port = getenv('PORT') ?: 8080;

/*
$hostname = 'localhost';

// Set the host as the first applicable route defined in the routes definition on Platform.sh.
if (isset($_ENV['PLATFORM_ROUTES'])) {
    $routes = json_decode(base64_decode($_ENV['PLATFORM_ROUTES']), TRUE);
    foreach ($routes as $url => $route) {
        $host = parse_url($url, PHP_URL_HOST);
        if ($host !== FALSE && $route['type'] == 'upstream' && $route['upstream'] == $_ENV['PLATFORM_APPLICATION_NAME']) {
            $hostname = $host;
            break;
        }
    }
}
*/

// create virtual host localhost:1337
// requests will first be routed, if no route matches, the server tries to find a file in the document root
// you can add more responders or even multiple document roots to a single host
(new Host)
    ->name('')
    ->expose("0.0.0.0", $port)
    ->use($router)
    ->use($root);

// $logger is the default Aerys logger which we can just use here to print a note
$logger->info("Open your browser and point it to http://localhost:" . $port . "/");
