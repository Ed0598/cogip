<?php
namespace App\Controller ;

class Contacts extends Controler
{
    /**
     * Variables privees
     */
    private $defaultRequest='SELECT contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.name AS name FROM contacts JOIN companies ON companies.id = contacts.company_id';
    private $table = 'contacts';

    /**
     * Constructeur
     */
    public function __construct()
    {
        parent::__construct($this->defaultRequest, $this->table);
    }

    /**
     * Fonction pour ajouter un contact
     * @param $payload 
     * @return $resultat de l'operation parent::post()
     */
    public function post($payload)
    {
        return parent::post(self::buildSQLQuery("insert", $payload));  
    }

    /**
     * Fonction pour mettre a jour un contact
     * @param $payload 
     * @return $resultat de l'operation parent::patch()
     */
    public function patch($payload)
    {
        return parent::patch(self::buildSQLQuery("update", $payload));   
    }

    /**
     * Fonction pour supprimer un contact
     * @param $id 
     * @return $resultat de l'operation parent::delete()
     */
    public function delete($id)
    {
        return parent::delete(self::buildSQLQuery("delete", $id));   
    }

    /**
     * Fonction pour construire la requete SQL en fonction du type d'operation et des informations fournies
     * @param $type 
     * @param $payload 
     * @return $requete SQL
     */
    private function buildSQLQuery($type, $payload)
    {
        if ($type == "delete")
            return "DELETE FROM contacts where id=$payload";
        $name = $payload['name'];
        $company_id = $payload['company_id'];
        $email = $payload['email'];
        $phone = $payload['phone'];
        $created_at = $payload['created_at'];
        $update_at = $payload['update_at'];

        if ($type == "insert")
            return "INSERT INTO `contacts`(`name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES ('$name',$company_id,'$email','$phone','$created_at','$update_at')";
        return "UPDATE contacts SET name='$name', company_id=$company_id, email='$email', phone='$phone', created_at='$created_at', update_at='$update_at'";
    }
}