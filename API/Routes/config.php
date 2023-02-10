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
    $router->get('/company/(\d+)', function ($id) use ($controller) {
        echo $controller->getCompany($id);
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
    $user = json_decode(file_get_contents('php://input'), true);

    $email = $user['email'];

    $sqlRequest= "SELECT email from users where email='$email'";
    $error= "Requete SQL :  ";

    try{
        $sqlRequest = createRequest($sqlRequest);
        // echo json_encode([
        //     'success'=>$first_name,
        //     'message'=> $sqlRequest[0]['first_name']
        // ]);
        if ($email === $sqlRequest[0]['email'])
        {
            echo json_encode([
                'success'=>true,
                'message'=> 'username ok'
            ]);
        }
        else
        {
            echo json_encode([
                'success'=>false,
                'message'=> 'username no'
            ]);
        }
    }

    catch (\Exception $e){

        return json_encode([
            'success'=> false,
            'message'=> $error . $e->getMessage(),
        ]);
    }
});
$router->post('/password',function()
{
    $user= json_decode(file_get_contents('php://input'), true);

    $password = $user['password'];
    $email = $user['email'];

    $sqlRequest= "SELECT email, password from users where email='$email'";
    $error= "Erreur dans le login : ";

    try
    {
        $sqlRequest= createRequest($sqlRequest);
        // echo json_encode([
        //     'success'=>true,
        //     'message'=> $password,
        //     'sdf'=> $sqlRequest[0]['password'],
        //     'dsf'=> $sqlRequest[0]['first_name'],
        //     'fds'=> $first_name,
        // ]);
        if ($password===($sqlRequest[0]['password']) && $email === $sqlRequest[0]['email'])
        {
            echo json_encode([
                'success'=>true,
                'message'=> 'password ok'
            ]);
        }
        else
        {
            echo json_encode([
                'success'=>false,
                'message'=> 'password no'
            ]);
        }
    }
    catch (\Exception $e){
        echo json_encode([
            'success'=> false,
            'message'=> $error. $e->getMessage(),
        ]);
    }
});
$router->post('/adduser', function(){
    $controller = new App\Controller\User('', '');

    $payload = json_decode(file_get_contents('php://input'), true);
    echo $controller->post($payload);
});
$router->run();