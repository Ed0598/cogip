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
        $name= $payload['name'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$name,$tmp))
            $errors['name']= 'Le nom ne peut contenir que des lettres';

            //gestion du type_id
        $type_id=$payload['type_id'];
        if(!preg_match("/^[0-9]$/", $type_id,$tmp))
            $errors['tva']='Le identifiant du type ne peut contenir que des chiffres';

            //gestion du pays
        $country=$payload['country'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$country,$tmp))
            $errors['country']= 'Le pays ne peut contenir que des lettres';

            //gestion TVA
        $tva=$payload["tva"];
        if(!preg_match("/^[0-9]$/", $tva,$tmp))
            $errors['tva']='Le numéro de tva ne peut contenir que des chiffres';

            //gestion de la date de creation
        $created_at = $payload['created_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
            $errors['date_create']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
        
            //gestion de la date de mise a jour
        $update_at = $payload['update_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
            $errors['date_update']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
    
        if ($type=='insert')
        {
            if(!empty($errors))
                throw new \Exception(join(", ", $errors), 1);
            return "INSERT into companies (name,type_id,country,tva,created_at,update_at) VALUES ('$name','$type_id','$country','$tva','$created_at','$update_at');";
        }

            //gestion id a modifier
        $id= $payload['id'];
        if(!preg_match("/^[0-9]$/", $id,$tmp))
            $errors['tva']='Le numéro d\'id ne peut contenir que des chiffres';

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        return "UPDATE companies SET name='$name', type_id='$type_id', country='$country', tva='$tva', created_at='$created_at', update_at='$update_at' WHERE id=$id";
    }
}