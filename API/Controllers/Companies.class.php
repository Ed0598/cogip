<?php

namespace App\Controller ;

Class Companies extends Controler
{
    
    private $defaultRequest='SELECT companies.id, companies.name, companies.country,companies.tva, companies.created_at, companies.update_at, types.name AS type FROM companies JOIN types ON types.id = companies.type_id ';
    private $table = 'companies';

    public function __construct(){
        parent::__construct($this->defaultRequest,$this->table);
    }

    public function post($payload){
        try {
            $recupRequest = self::querryCompanies("insert", $payload);
            return parent::post($recupRequest);  
        } catch (\Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
    }

    public function patch($payload){
        try {
            $recupRequest = self::querryCompanies("update011111111", $payload);
            return parent::patch($recupRequest);  
        } catch (\Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
    }

    public function delete($payload){
        return parent::delete(self::querryCompanies('delete',$payload));
    }

    private function querryCompanies($type,$payload){
        if ($type == 'delete')
        {
            if (!preg_match("/^[0-9]$/",$payload,$tmp))
                throw new \Exception("La référence ne peut contenir que des caractère alphanumériques ", 1);
            return "DELETE FROM companies where id=$payload";
        }
            
        $errors= array();
        
            //gestion du nom
            if (isset($payload['name']))
            {
                $name= $payload['name'];
                if (!preg_match("/^[a-zA-Z\s-]$/",$name,$tmp))
                    $errors['name']= 'Le nom ne peut contenir que des lettres';

            }
            else
                $errors['name']= 'Le nom n\'existe pas';

            //gestion du type_id
            if (isset($payload['type_id'])){
                $type_id=$payload['type_id'];
                if(!preg_match("/^[0-9]$/", $type_id,$tmp));
                $errors['type_id']='Le identifiant du type ne peut contenir que des chiffres';

            }
            else
            $errors['type_id']='Identifiant inconnu';

            //gestion du pays
            if (isset($payload['country'])){
                $country=$payload['country'];
                if (!preg_match("/^[a-zA-Z\s-]$/",$country,$tmp));
                $errors['country']= 'Le pays ne peut contenir que des lettres';

            }
            else
            $errors['country']= 'Pays incorrect';

            //gestion TVA
            if (isset($payload)){
            $tva=$payload["tva"];
                if(!preg_match("/^[0-9]$/", $tva,$tmp))
                $errors['tva']='Le numéro de tva ne peut contenir que des chiffres';

            }
            else
            $errors['tva']='Numéro de TVA incorrect';

            //gestion de la date de creation
            if (isset($payload['created_at'])){
            $created_at = $payload['created_at'];
                if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
                $errors['created_at']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
            }
            else
            $errors['created_at']= 'Date saisie incorrecte';

        
            //gestion de la date de mise a jour
            if (isset($payload['update_at'])){
                $update_at = $payload['update_at'];
                if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
                    $errors['update_at']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
            }
            else
            $errors['update_at']= 'Date saisie incorrecte';


    
        if ($type=='insert')
        {
            if(!empty($errors))
                throw new \Exception(join(", ", $errors), 1);
            return "INSERT into companies (name,type_id,country,tva,created_at,update_at) VALUES ('$name','$type_id','$country','$tva','$created_at','$update_at');";
        }

            //gestion id a modifier
        $id= $payload['id'];
        if(!preg_match("/^[0-9]$/", $id,$tmp))
            $errors['id']='Le numéro d\'id ne peut contenir que des chiffres';

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        return "UPDATE companies SET name='$name', type_id='$type_id', country='$country', tva='$tva', created_at='$created_at', update_at='$update_at' WHERE id=$id";
    }
}
