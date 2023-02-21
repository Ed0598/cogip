<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

// Function to generate a JWT for a user

// Route to generate a JWT
// $router->post('/generate-jwt', function () {
//     $token = new App\Controller\token();
//     echo $token->post(json_decode(file_get_contents('php://input'), true));
//     return;
// });
// $router->mount('/*', function () {
//     $headers = getallheaders();
//     $token = new App\Controller\token();
//     echo $token->check($headers);
// });

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
        echo $controller->post(json_decode(file_get_contents('php://input'), true));
    });
    $router->patch('/update', function() use ($controller) {
        echo $controller->patch(json_decode(file_get_contents('php://input'), true));
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {
        echo $controller->delete($id);
    });
    $router->get('/company/(\d+)', function ($id) use ($controller) {
        echo $controller->getCompany($id,"company_id");
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
        echo $controller->post(json_decode(file_get_contents('php://input'), true));
    });
    $router->patch('/update', function() use ($controller){
        echo $controller->patch(json_decode(file_get_contents('php://input'), true));
    });
    $router->delete('/delete/{id}', function ($id) use ($controller) {
        echo $controller->delete($id);
    });    
    $router->get('/company/(\d+)', function ($id) use ($controller) {
        echo $controller->getCompany($id,"id_company");
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
        echo $controller->post(json_decode(file_get_contents('php://input'), true));
    });
    $router->patch('/update', function() use ($controller) {
        echo $controller->patch(json_decode(file_get_contents('php://input'), true));
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {
        echo $controller->delete($id);
    });
});

$router->mount('/login', function () use ($router) {
    $controller = new App\Controller\Login('','');
    $router->post('/user', function () use ($controller) {
        echo $controller->user(json_decode(file_get_contents('php://input'), true));
    });
    $router->post('/password', function () use ($controller) {
        echo $controller->pwd(json_decode(file_get_contents('php://input'), true));
    });
    $router->post('/adduser', function() use ($controller) {
        echo $controller->post(json_decode(file_get_contents('php://input'), true));
    });
});


$router->run();