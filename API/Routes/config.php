<?php


use App\Controller;
require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->mount('/contacts',function() use($router){
    $defaultRequest='SELECT contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.name AS name FROM contacts JOIN companies ON companies.id = contacts.company_id';
    $controller = new App\Controller\Controler($defaultRequest, 'contacts');
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
        $name = $payload['name'];
        $company_id= $payload['company_id'];
        $email= $payload['email'];
        $phone= $payload['phone'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestAdd= "INSERT INTO `contacts`(`name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES ('$name','$company_id','$email','$phone','$created_at','$update_at')";
        echo $controller->post($requestAdd);
    });
    $router->patch('/update', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        $name = $payload['name'];
        $company_id= $payload['company_id'];
        $email= $payload['email'];
        $phone= $payload['phone'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestUpdate="UPDATE contacts SET name='$name', company_id=$company_id, email='$email', phone='$phone', created_at='$created_at', update_at='$update_at'";
        echo $controller->patch($requestUpdate);
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {

        $requeDelete= "DELETE FROM contacts where id=$id";
        createRequest($requeDelete);

        echo json_encode([
            'success' => true,
            'message' => "GG BRO",
        ]);
    });
});

$router->mount('/factures', function () use ($router) {
    $defaultRequest = 'SELECT invoices.ref, invoices.created_at, companies.name AS name FROM invoices JOIN companies ON companies.id = invoices.id_company';
    $controller = new App\Controller\Controler($defaultRequest, 'invoices');
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
        $ref = $payload['ref'];
        $id_company= $payload['id_company'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestAdd= "INSERT INTO `invoices`(`ref`, `id_company`, `created_at`, `update_at`) VALUES ('$ref','$id_company','$created_at','$update_at')";
        echo $controller->post($requestAdd);
    });
    $router->patch('/update', function() use ($controller){
        $payload = json_decode(file_get_contents('php://input'), true);
        $ref = $payload['ref'];
        $id_company= $payload['id_company'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestUpdate="UPDATE invoices SET ref='$ref', id_company='$id_company', created_at='$created_at', update_at='$update_at'";
        echo $controller->patch($requestUpdate);

    });
    $router->delete('/delete/{id}',function($id) use ($controller) {

        $requedelete= "DELETE FROM invoices where id=$id";
        createRequest($requedelete);

        echo json_encode([
            'success' => true,
            'message' => "GG BRO",
        ]);
    });
});

$router->mount('/compagnies', function () use ($router) {
    $defaultRequest = 'SELECT companies.name, companies.TVA, companies.country, companies.created_at, types.name AS type FROM companies JOIN types ON companies.type_id = types.id';
    $controller = new App\Controller\Controler($defaultRequest, 'companies');
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
        $name = $payload['name'];
        $type_id= $payload['type_id'];
        $country= $payload['country'];
        $tva= $payload['tva'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestAdd= "INSERT INTO `companies`(`name`, `type_id`, `country`, `tva`, `created_at`, `update_at`) VALUES ('$name','$type_id','$country','$tva','$created_at','$update_at')";
        echo $controller->post($requestAdd);
    });
    $router->patch('/update', function() use ($controller) {
        $payload = json_decode(file_get_contents('php://input'), true);
        $name = $payload['name'];
        $type_id= $payload['type_id'];
        $country= $payload['country'];
        $tva= $payload['tva'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        $requestUpdate="UPDATE companies SET name='$name', type_id=$type_id, country='$country', tva='$tva', created_at='$created_at', update_at='$update_at'";
        echo $controller->patch($requestUpdate);
    });
    $router->delete('/delete/{id}',function($id) use ($controller) {

        $requedelete= "DELETE FROM companies where id=$id";
        createRequest($requedelete);

        echo json_encode([
            'success' => true,
            'message' => "GG BRO",
        ]);
    });
});

$router->run();