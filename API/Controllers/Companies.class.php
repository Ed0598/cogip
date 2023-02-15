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
        try { return parent::post(self::querryCompanies("insert", $payload)); }
        catch (\Exception $e) { return json_gen(false, $e->getMessage()); } 
    }

    public function patch($payload){
        try { return parent::patch(self::querryCompanies("update", $payload)); }
        catch (\Exception $e) { return json_gen(false, $e->getMessage()); } 
    }

    public function delete($payload){
        return parent::delete(self::querryCompanies('delete',$payload));
    }

    private function querryCompanies($type,$payload){
        if ($type == 'delete')
        {
            if (isset($payload) && !preg_match("/^[0-9]$/", $payload, $tmp))
                throw new \Exception("Le id ne peut contenir que des nombres", 1);
            else if (!isset($payload))
                throw new \Exception("Le id ne peut pas etre vide", 1);
            return "DELETE FROM companies where id=$payload";
        }
            
        $errors= array();
        
        $required_fields = ['name', 'type_id', 'country', 'tva', 'created_at', 'update_at'];
        foreach ($required_fields as $field)
            if (!isset($payload[$field]))
                $errors[$field] = "Le champ '$field' n'existe pas.";

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        //gestion du nom
        $name= $payload['name'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$name,$tmp))
            $errors['name']= 'Le nom ne peut contenir que des lettres';

        //gestion du type_id
        $type_id=$payload['type_id'];
        if(!preg_match("/^[0-9]$/", $type_id,$tmp));
            $errors['type_id']='Le identifiant du type ne peut contenir que des chiffres';

        //gestion du pays
        $country=$payload['country'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$country,$tmp));
            $errors['country']= 'Le pays ne peut contenir que des lettres';

        //gestion TVA
        $tva=$payload["tva"];
        if(!preg_match("/^[0-9]$/", $tva,$tmp))
            $errors['tva']='Le numéro de tva ne peut contenir que des chiffres';

        //gestion de la date de creation
        $created_at = $payload['created_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
            $errors['created_at']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
    
        //gestion de la date de mise a jour
        $update_at = $payload['update_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
            $errors['update_at']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
    
        if ($type=='insert')
        {
            if(!empty($errors))
                throw new \Exception(join(", ", $errors), 1);
            return "INSERT into companies (name,type_id,country,tva,created_at,update_at) VALUES ('$name','$type_id','$country','$tva','$created_at','$update_at');";
        }

        //gestion id a modifier
        if (isset($payload['id']))
        {
            $id= $payload['id'];
            if (!preg_match("/^[0-9]$/", $id, $tmp))
                $errors['id']= 'Le numéro d\'identifiant ne peut contenir que des nombres';
        }
        else
            $errors['id']= 'Le numéro d\'identifiant ne peut pas etre vide';

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        return "UPDATE companies SET name='$name', type_id='$type_id', country='$country', tva='$tva', created_at='$created_at', update_at='$update_at' WHERE id=$id";
    }
}
