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



$router->get('/factures/five', function () {
    echo json_encode(selectHome('invoices'));
});
$router->get('/factures/all', function () {
    echo json_encode(selectTables('invoices','created_at'));
});
$router->get('/factures/(\d+)', function ($id) {
    echo json_encode(selectTables('invoices',$id));
});



$router->get('/compagnies/five', function () {
    echo json_encode(selectHome('companies'));
});
$router->get('/compagnies/all', function () {
    echo json_encode(selectTables('companies','created_at'));
});
$router->get('/compagnies/(\d+)', function ($id) {
    echo json_encode(selectTables('companies',$id));
});

$router->run();
