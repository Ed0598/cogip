<?php

require __DIR__ . '/vendor/autoload.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json");
$router = new \Bramus\Router\Router();

$router->get('/users', function () {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', '');
        $resultat=$pdo->prepare("SELECT * from contacts");
        $resultat->execute();
        $donnees=$resultat->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($donnees);
    });

$router->run();



