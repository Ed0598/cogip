<?php
namespace App\Controller ;

class Contacts extends Controler
{
    private $defaultRequest='SELECT contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.name AS name FROM contacts JOIN companies ON companies.id = contacts.company_id';
    private $table = 'contacts';
    public function __construct()
    {
        parent::__construct($this->defaultRequest, $this->table);
    }

    public function post($payload)
    {
        $name       = $payload['name'];
        $company_id = $payload['company_id'];
        $email      = $payload['email'];
        $phone      = $payload['phone'];
        $created_at = $payload['created_at'];
        $update_at  = $payload['update_at'];

        $requestAdd = "INSERT INTO `contacts`(`name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES ('$name',$company_id,'$email','$phone','$created_at','$update_at')";
        
        return json_encode(parent::post($requestAdd));  
    }

    public function patch($payload)
    {
        $name           = $payload['name'];
        $company_id     = $payload['company_id'];
        $email          = $payload['email'];
        $phone          = $payload['phone'];
        $created_at     = $payload['created_at'];
        $update_at      = $payload['update_at'];

        $requestUpdate  = "UPDATE contacts SET name='$name', company_id=$company_id, email='$email', phone='$phone', created_at='$created_at', update_at='$update_at'";
        
        return parent::patch($requestUpdate);   
    }

    public function delete($id)
    {
        $requeDelete= "DELETE FROM contacts where id=$id";
        return parent::delete($requeDelete);   
    }
}
