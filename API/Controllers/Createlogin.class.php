<?php

namespace App\Controller ;

class User extends controler{

    private function createUser($payload)
    {
        $username= $payload['username'];
        $email= $payload['email'];
        $password= $payload['password'];
        $creationRequest= 'INSERT INTO users (first_name,email,password,created_at,updated_at) VALUES ("'.$username.'","'.$email.'","'.$password.'",now(),now())';
        return $creationRequest;
    }
    public function post($payload)
    {
        return parent::post(self::createUser($payload));
    }

}