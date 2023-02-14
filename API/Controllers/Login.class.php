<?php
namespace App\Controller;

class Login extends Controler{
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
    public function user($user)
    {
        $email = $user['email'];
        $sqlRequest= "SELECT email from users where email='$email'";
        $error= "Requete SQL :  ";
        try{
            $sqlRequest = createRequest($sqlRequest);
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
                    'message'=> $sqlRequest
                ]);
            }
        }

        catch (\Exception $e){

            return json_encode([
                'success'=> false,
                'message'=> $error . $e->getMessage(),
            ]);
        }
    }

    public function pwd($user)
    {
        $password = $user['password'];
        $email = $user['email'];

        $sqlRequest= "SELECT email, password from users where email='$email'";
        $error= "Erreur dans le login : ";

        try
        {
            $sqlRequest= createRequest($sqlRequest);
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
    }

}