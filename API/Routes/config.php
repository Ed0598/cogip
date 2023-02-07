<?php


use App\Controller;
require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->mount('/contacts',function() use($router){
    $controller = new App\Controller\Contacts();
    $router->get('/five', function () use ($controller) {
        echo $controller->getFive();
    });
    $router->get('/all', function () use ($controller) {
        echo $controller->getAll();
    });
    $router->get('/(\d+)', function ($id) use ($controller) {
        echo $controller->get($id);
    });
    $router->post('/add', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->post($payload);
    });
    $router->patch('/update', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->patch($payload);
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {
        echo $controller->delete($id);
    });
});

$router->mount('/factures', function () use ($router) {
    $controller = new App\Controller\Invoices();
    $router->get('/five', function () use ($controller) {
        echo $controller->getFive();
    });
    $router->get('/all', function () use ($controller) {
        echo $controller->getAll();
    });
    $router->get('/(\d+)', function ($id) use ($controller) {
        echo $controller->get($id);
    });
    $router->post('/add', function() use ($controller){
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->post($payload);
    });
    $router->patch('/update', function() use ($controller){
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->patch($payload);

    });
    $router->delete('/delete/{id}', function ($id) use ($controller) {
        echo $controller->delete($id);
    });
});

$router->mount('/compagnies', function () use ($router) {
    $controller = new App\Controller\Companies();
    $router->get('/five', function () use ($controller) {
        echo $controller->getFive();
    });
    $router->get('/all', function () use ($controller) {
        echo $controller->getAll();
    });
    $router->get('/(\d+)', function ($id) use ($controller) {
        echo $controller->get($id);
    });
    $router->post('/add', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->post($payload);
    });
    $router->patch('/update', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->patch($payload);
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {
        echo $controller->delete($id);
    });
});

$router->run();