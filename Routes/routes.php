<?php 
use Core\Router as Router;

$router = new Router();


$router->add('/', ['controller' => 'Home', 'action' => 'index']);
$router->add('/posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('/api/posts', ['controller' => 'Posts', 'action' => 'all']);

require 'auth_routes.php';

// Dispatch Current Route
$router->dispatch($_SERVER['REQUEST_URI']);



// Uncomment to display the routing table and show the matched routes
/*
echo '<pre>';
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';
*/

// Uncomment to show the current routes controller|action|(and,or) namespace
/*
$url = $_SERVER['REQUEST_URI'];
if($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
}else{
    echo "No route found for URL '$url' <br><br>";
}
*/