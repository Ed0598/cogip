<?php
namespace App\Controller ;

// class token {
//     public function post($request)
//     {
//         $jwt = self::generateJWT($request['userId']);
//         $addToken= "INSERT INTO tokens (token) VALUES ('$jwt')";
//         $verifyToken= "SELECT token FROM tokens where token ='$jwt'";
//         try{
//             if (createRequest($verifyToken)!= $jwt)
//             {
//                 createRequest($addToken);
//                 echo json_gen(true, $jwt);
//             }
//         }
//         catch (\Exception $e) { echo json_gen(false, $e->getCode() . " " . $e->getMessage()); }
//     }

//     public function check($headers)
//     {
//         if (isset($headers['key']))
//         {
//             $headerData = $headers['key'];
//             if (!self::verifyJWT($headerData) && $headerData != 'gen')
//             {
//                 echo json_gen(false, 'Le token n\'est pas valide');
//                 exit();
//             }
//         }
//         else
//         {
//             echo json_gen(false, 'Le token n\'a pas ete donne');
//             exit();
//         }
//     }

//     private function generateJWT($userId) {
//         $secretKey = "secretKeyForSigningJWT";
//         $payload = array(
//             "userId" => $userId,
//             "exp" => time() + 3600 // token expiration time (1 hour)
//         );
//         return \Firebase\JWT\JWT::encode($payload, $secretKey, 'HS256');
//     }

//     // Function to verify a JWT
//     private function verifyJWT($jwt) {
//         $secretKey = "secretKeyForSigningJWT";
//         try { return \Firebase\JWT\JWT::decode($jwt, new \Firebase\JWT\Key($secretKey, 'HS256')); }
//         catch (\Exception $e) { return false; }
//     }
}