<?php
namespace App\Controller ;
use Exception;


class Contacts extends Controler
{
    /**
     * Variables privees
     */
    private $defaultRequest='SELECT contacts.id, contacts.name, contacts.email, contacts.phone, contacts.created_at, companies.id AS companies_id, companies.name AS name_compagnie FROM contacts JOIN companies ON companies.id = contacts.company_id ';
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
        try {
            $recupRequest = self::buildSQLQuery("insert", $payload);
            return parent::post($recupRequest);  
        } catch (Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
    }

    /**
     * Fonction pour mettre a jour un contact
     * @param $payload 
     * @return $resultat de l'operation parent::patch()
     */
    public function patch($payload)
    {
        try {
            $recupRequest = self::buildSQLQuery("update", $payload);
            return parent::patch($recupRequest);  
        } catch (Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
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
        {
            if (!preg_match("/^[0-9]$/", $payload, $tmp))
                throw new Exception("Le id ne peut contenir que des nombres", 1);
            return "DELETE FROM contacts where id=$payload";
        }
        $errors=array();

            //gestion du nom
            if (isset($payload['name'])){
                $name= $payload['name'];
                if (!preg_match("/^[a-zA-Z\s-]$/", $name, $tmp))
                    $errors['name']= 'Le nom ne peut contenir que des lettres';
            }
            else
            $errors['name']= 'Le nom n\'existe pas';

        
            //gestion de l'id de la compagnie
            if (isset($payload['company_id'])){
                $company_id = $payload['company_id'];
                if (!preg_match("/^[0-9]$/", $company_id, $tmp))
                    $errors['company_id']= 'Le numéro de compagnie ne peut contenir que des nombres';
            }
            else
            $errors['company_id']= 'Le numéro de compagnie n\'existe pas';


        
            //gestion de l'email
            if (isset($payload['email'])){
                $email = $payload['email'];
                if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email, $tmp))
                $errors['email']="L'adresse email n'est pas valide ";
            }
            else
                $errors['email']="L'adresse email n'existe pas ";


        
            //gestion numéro de téléphone
            if (isset($payload['phone'])){
                $phone = $payload['phone'];
                if (!preg_match("/^[0-9]$/", $phone, $tmp))
                    $errors['phone']= 'Le numéro de téléphone ne peut contenir que des nombres';
            }
            $errors['phone']= 'Le numéro de téléphone n\'existe pas';


            //gestion de la date de creation
            if (isset($payload['created_at'])){
                $created_at = $payload['created_at'];
                    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
                        $errors['created_at']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
            }
            $errors['created_at']= 'Date saisie incorrecte ';
        
            //gestion de la date de mise a jour
            if (isset($payload['update_at'])){
                $update_at = $payload['update_at'];
                    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
                        $errors['update_at']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
            }
            else 
            $errors['update_at']= 'Date saisie incorrecte';

            

        if ($type == "insert")
        {
                //retourne une execption
            if(!empty($errors))
                throw new Exception(join(", ", $errors), 1);
            return "INSERT INTO `contacts`(`name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES ('$name',$company_id,'$email','$phone','$created_at','$update_at')";
        }

            //gestion de l'id
        $id= $payload['id'];
        if (!preg_match("/^[0-9]$/", $id, $tmp))
            $errors['id']= 'Le numéro d\'identifiant ne peut contenir que des nombres';

            //retourne une execption
        if(!empty($errors))
            throw new Exception(join(", ", $errors), 1);

        return "UPDATE contacts SET name='$name', company_id=$company_id, email='$email', phone='$phone', created_at='$created_at', update_at='$update_at' WHERE id=$id";

    }
}