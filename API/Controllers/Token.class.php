<?php

class token {
    public function post($request)
    {
        $jwt = self::generateJWT($request['userId']);
        $addToken= "INSERT INTO tokens (token) VALUES ('$jwt')";
        $verifyToken= "SELECT token FROM tokens where token ='$jwt'";
        try{
            if (createRequest($verifyToken)!= $jwt)
            {
                createRequest($addToken);
                echo json_encode([
                    'success'=>true,
                    'jwt'=>$jwt,
                ]);
            }
        }
        catch (\Exception $e) {
            echo json_encode([
                'success'=>false,
                'message'=> $e->getMessage(),
            ]);
        }
    }

    public function check($headers)
    {
        if (isset($headers['key']))
        {
            $headerData = $headers['key'];
            if (!self::verifyJWT($headerData) && $headerData != 'gen')
            {
                echo json_encode([
                        'success'=>false,
                        'jwt'=>'u lose'
                    ]);
                exit();
            }
        }
        else
        {
            echo json_encode([
                'success'=>false,
                'jwt'=>'u lose'
            ]);
            exit();
        }
    }

    private function generateJWT($userId) {
        $secretKey = "secretKeyForSigningJWT";
        $payload = array(
            "userId" => $userId,
            "exp" => time() + 3600 // token expiration time (1 hour)
        );
    
        return \Firebase\JWT\JWT::encode($payload, $secretKey, 'HS256');
    }
    // Function to verify a JWT
    private function verifyJWT($jwt) {
        $secretKey = "secretKeyForSigningJWT";
        try {
            $decoded = \Firebase\JWT\JWT::decode($jwt, new \Firebase\JWT\Key($secretKey, 'HS256'));
            return $decoded;
        } catch (Exception $e) {
            return false;
        }
    }
}