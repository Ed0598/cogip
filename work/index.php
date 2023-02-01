<?php

require __DIR__ . '/vendor/autoload.php';

header('Access-Control-Allow-Origin: http://localhost:3000');
header('Content-Type: text/html; charset=utf-8');
$router = new \Bramus\Router\Router();


$router->get('/', function() {
    return 'Welcome to my API!';
});

$router->get('/users', function () {
    return [
        ['id' => 1, 'name' => 'John Doe'],
        ['id' => 2, 'name' => 'Jane Doe'],
    ];
});

$router->run();
