<?php
namespace App\Controller;

class Login extends Controler{
    private function createUser($payload)
    {
        $errors=array();

        if (isset($payload['username']))
        {
            $username= $payload['username'];
            if (!preg_match("/^[a-zA-Z\s-]$/", $username, $tmp))
                $errors['username']= 'Le username ne peut contenir que des lettres';
        }
        else
            $errors['username']= 'Le username n\'existe pas';

        if (isset($payload['email']))
        {
            $email = $payload['email'];
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email, $tmp))
                $errors['email']="L'adresse email n'est pas valide ";
        }
        else
            $errors['email']="L'adresse email n'existe pas ";

        (isset($payload['password'])) ? $password = $payload['password'] : $errors['password']="Le password n'existe pas ";

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 406);
        return "INSERT INTO users (first_name,email,password,created_at,updated_at) VALUES ('$username','$email','$password',now(),now())";
    }
    public function post($payload)
    {
        try { return parent::post(self::createUser($payload)); }
        catch (\Exception $e) { return json_gen(false, $e->getCode() . " " . $e->getMessage()); }
    }

    public function user($user)
    {
        if (isset($user['email']))
        {
            $email = $user['email'];
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email, $tmp))
                return json_gen(false, "L'adresse email n'est pas valide ");
        }

        $sqlRequest= "SELECT email from users where email='$email'";
        $error= "Requete SQL :  ";

        try{
            $sqlRequest = createRequest($sqlRequest);
            echo ($email === $sqlRequest[0]['email']) ? json_gen(true, 'username ok'): json_gen(false, 'username no');
        }
        catch (\Exception $e) { echo json_gen(false, $error . $e->getCode() . " " . $e->getMessage()); }
    }

    public function pwd($user)
    {
        $errors=array();

        (isset($user['password'])) ? $password = $user['password']: $errors['password']="Le password n'existe pas ";

        if (isset($user['email']))
        {
            $email = $user['email'];
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email, $tmp))
                $errors['name']= 'Le nom ne peut contenir que des lettres';
        }
        else
            $errors['name']= 'Le nom n\'existe pas';
        
        if(!empty($errors))
            return json_gen(false, join(", ", $errors));

        $sqlRequest= "SELECT email, password from users where email='$email'";
        $error= "Erreur dans le login : ";

        try
        {
            $sqlRequest= createRequest($sqlRequest);
            echo ($password===($sqlRequest[0]['password']) && $email === $sqlRequest[0]['email']) ? json_gen(true, 'password ok'): json_gen(false, 'password no');
        }
        catch (\Exception $e){ echo json_gen(false, $error . $e->getCode() . " " . $e->getMessage()); }
    }

}