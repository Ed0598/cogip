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
    $router->post('/user',function()
    {
        $user= json_decode(file_get_contents('php://input'), true);

        $recupUser= "SELECT first_name from users where first_name='".$user['first_name']."'";

        $error= "Nom d'utilisateur incorrect ! ";

        try{
            createRequest($recupUser);
            echo json_encode([
                'success'=>true,
                'message'=> "Utilisateur reconnu brav !"
            ]);
        }

        catch (\Exception $e){
            $recup = $e->getMessage();
            return json_encode([
                'success'=> false,
                'message'=> $error,
            ]);
        }
    });
    $router->post('/password',function()
    {
        $user= json_decode(file_get_contents('php://input'), true);

        $recupPassword= "SELECT password from users where first_name='".$user['first_name']."'";

        $error= "Mot de passe incorrect ! ";

        try
        {
            $password= createRequest($recupPassword);
            if ($user['password']===($password[0][0]))
            {
                echo json_encode([
                    'success'=>true,
                    'message'=> "Mot de passe correct !"
                ]);
            }
            else
            {
                echo json_encode([
                    'success'=>false,
                    'message'=> "Mot de passe incorrect !"
                ]);
            }
        }
        catch (\Exception $e){
            $recup = $e->getMessage();
            echo json_encode([
                'success'=> false,
                'message'=> $error,
            ]);
        }
    });

    $router->post('/adduser', function($controller){
        $payload = json_decode(file_get_contents('php://input'), true);
        echo $controller->post($payload);
    });
$router->run();