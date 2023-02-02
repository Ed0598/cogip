<?php

require __DIR__ . '/vendor/autoload.php';
require "../assets/php/request.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json");

$router = new \Bramus\Router\Router();

$router->get('/contacts/five', function () {
    echo json_encode(selectHome('contacts'));
});
$router->get('/contacts/all', function () {
    echo json_encode(selectTables('contacts','name'));
});
$router->get('/contacts/(\d+)', function ($id) {
    echo json_encode(selectTables('contacts',$id));
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
        echo json_encode(createRequest($defaultRequest, 1, '', ''));
    });
    $router->get('/all', function () use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest,2,'created_at',''));
    });
    $router->get('/(\d+)', function ($id) use ($defaultRequest) {
        echo json_encode(createRequest($defaultRequest,3,'',$id));
    });
});

$router->run();
