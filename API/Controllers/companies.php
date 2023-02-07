<?php

namespace App\Controller ;

Class Companies extends Controler
{
    
    private $defaultRequest='SELECT companies.name, companies.type_id,companies.country,companies.tva, companies.created_at, companies.update_at AS name FROM companies JOIN types ON types.id = companies.type_id ';
    private $table = 'companies';

    public function __construct(){
        parent::__construct($this->defaultRequest,$this->table);
    }

    public function post($payload){
        return parent::post(self::querryCompanies('insert',$payload));
    }

    public function patch($payload){
        return parent::patch(self::querryCompanies('update',$payload));
    }

    public function delete($payload){
        return parent::delete(self::querryCompanies('delete',$payload));
    }

    private function querryCompanies($type,$payload){
        if ($type == 'delete')
            return "DELETE FROM companies where id=$payload";

        $name= $payload['name'];
        $type_id=$payload['type_id'];
        $country=$payload['country'];
        $tva=$payload["tva"];
        $created_at=$payload['created_at'];
        $update_at=$payload['update_at'];

        if ($type=='insert')
            return "INSET into companies (name,type_id,country,tva,created_at,update_at) VALUES ('$name','$type_id','$country','$tva','$created_at','$update_at');";

        $id= $payload['id'];
        return "UPDATE companies SET name='$name', type_id='$type_id', country='$country', tva='$tva', created_at='$created_at', update_at='$update_at' WHERE id=$id";
    }

}