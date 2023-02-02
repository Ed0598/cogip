<?php

require __DIR__ . '/vendor/autoload.php';
require "../assets/php/request.php";

if (isset($_SERVER['HTTP_ORIGIN']))
{
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 1000');
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) 
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
    exit(0);
}

$router = new \Bramus\Router\Router();

$router->mount('/contacts',function() use($router){
    $defaultRequest='SELECT contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.name AS name FROM contacts JOIN companies ON companies.id = contacts.company_id';
    $router->get('/five',function() use ($defaultRequest){
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC limit 5 '));
    });
    $router->get('/all', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC'));
    });
    $router->get('/(\d+)', function ($id) use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' WHERE id='.$id));
    });
    $router->post('/test', function(){
        $data= $_POST;
        echo json_encode(['message' => 'Données reçues avec succès']);
    });
});

$router->mount('/factures', function () use ($router) {
    $defaultRequest = 'SELECT invoices.ref, invoices.created_at, companies.name AS name FROM invoices JOIN companies ON companies.id = invoices.id_company';
    $router->get('/five', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC limit 5 '));
    });
    $router->get('/all', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC'));
    });
    $router->get('/(\d+)', function ($id) use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' WHERE id='.$id));
    });
});

$router->mount('/compagnies', function () use ($router) {
    $defaultRequest = 'SELECT companies.name, companies.TVA, companies.country, companies.created_at, types.name AS type FROM companies JOIN types ON companies.type_id = types.id';
    $router->get('/five', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC limit 5 '));
    });
    $router->get('/all', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC'));
    });
    $router->get('/(\d+)', function ($id) use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest.' WHERE id='.$id));
    });
    
});



$router->run();
