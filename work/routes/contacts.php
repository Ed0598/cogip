<?php
$router->mount('/contacts',function() use($router){
    $defaultRequest='SELECT contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.name AS name FROM contacts JOIN companies ON companies.id = contacts.company_id';
    $router->get('/five',function() use ($defaultRequest)
    {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC limit 5 '));
    });
    $router->get('/all', function () use ($defaultRequest) 
    {
        echo json_encode(createRequest($defaultRequest.' order by created_at DESC'));
    });
    $router->get('/(\d+)', function ($id) use ($defaultRequest) 
    {
        echo json_encode(createRequest($defaultRequest.' WHERE id='.$id));
    });
    $router->post('/add', function(){
        $payload = json_decode(file_get_contents('php://input'), true);
        $name = $payload['name'];
        $company_id= $payload['company_id'];
        $email= $payload['email'];
        $phone= $payload['phone'];
        $created_at= $payload['created_at'];
        $update_at= $payload['update_at'];

        //connect to sql and request
        try { $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', ''); }
        catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
        $requestAdd= "INSERT INTO `contacts`(`name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES ('".$name."','".$company_id."','".$email."','".$phone."','".$created_at."','".$update_at."')";
        $ps=$bdd->prepare($requestAdd);
        $ps->execute();

        echo json_encode([
            'success' => true,
            'message' => 'GG BRO'
        ]);
    });
});
?>