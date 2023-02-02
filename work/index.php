<?php

require __DIR__ . '/vendor/autoload.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json");
$router = new \Bramus\Router\Router();

$router->get('/users', function () {
    try                 { $pdo = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', ''); }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    // $pdo = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '');
    $resultat=$pdo->prepare("SELECT * from contacts");
    $resultat->execute();
    $donnees=$resultat->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($donnees);
});


// $router->get('/users', function () {
//     // echo json_encode([["test" => "tst"], ["test" => "test"]]);
//     try                 { $bdd = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', ''); }
//     catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
//     $array = array();
//     $last = 'SELECT * from contacts';
//     $ps = $bdd->prepare($last);
//     $ps->execute();
//     $resultat = $ps->fetchAll(PDO::FETCH_ASSOC);
//     while ($row = $ps->fetchAll(PDO::FETCH_ASSOC))
//         $array[] = $row;
//     echo json_encode($array);
// });

$router->run();



