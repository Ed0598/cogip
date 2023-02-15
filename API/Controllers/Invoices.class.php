<?php

namespace App\Controller ;

class Invoices extends Controler
{
    private function querryInvoices($type,$payload)
    {
        if ($type == 'delete')
        {
            if (isset($payload) && !preg_match("/^[0-9]$/",$payload,$tmp))
                    throw new \Exception("La référence ne peut contenir que des caractère alphanumériques ", 1);
            else if (!isset($payload))
                throw new \Exception("La référence ne peut pas etre vide ", 1);            
            return "DELETE FROM invoices where id= $payload";
        }
        $errors= array();

        //gestion des références 
        if (isset($payload['ref']))
        {
            $ref= $payload['ref'];
            if (!preg_match("/^[a-zA-Z0-9]$/",$ref,$tmp))
                $errors['ref'] = "La référence ne peut contenir que des caractère alphanumériques ";
        }
        else
            $errors['ref'] = "La référence ne peut pas etre vide ";
        

            //gestion de l'ip de la compagnie
        if (isset($payload['id_company']))
        {
            $id_company=$payload['id_company'];
            if (!preg_match("/^[0-9]$/",$id_company,$tmp))
                $errors['id_company'] = "L'ID ne peut contenir que des nombres";
        }
        else
            $errors['id_company'] = "L'ID ne peut pas etre vide ";


            //gestion de la date de creation
        if (isset($payload['created_at']))
        {
            $created_at = $payload['created_at'];
            if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
                $errors['date_create']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
        }
        else
            $errors['date_create']= 'La date de creation ne peut pas etre vide ';

        
            //gestion de la date de mise a jour
        if (isset($payload['update_at']))
        {
            $update_at = $payload['update_at'];
            if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
                $errors['update_at']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
        }
        else
            $errors['update_at']= 'La date de mise a jour ne peut pas etre vide ';


        if($type == 'insert')
        {
            if(!empty($errors))
                throw new \Exception(join(", ", $errors), 1);
            return "INSERT into invoices (ref,id_company,created_at,update_at) VALUES ('".$ref."','".$id_company."','".$created_at."','".$update_at."');";
        }

            //gestion de l'ip de mise a jour
        if (isset($payload['id']))
        {
            $id= $payload['id'];
            if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
                $errors['id']= 'L\'id ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
        }
        else
            $errors['id']= 'L\'id ne peut pas etre vide ';

        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        return "UPDATE invoices SET ref='$ref', id_company='$id_company',  created_at='$created_at', update_at='$update_at' WHERE id=$id";
    }

    private $defaultRequest='SELECT invoices.id, invoices.ref, invoices.id_company, invoices.created_at, invoices.update_at, companies.name AS name FROM invoices JOIN companies ON companies.id = invoices.id_company ';
    private $table = 'invoices';

    public function __construct()
    {
        parent::__construct($this->defaultRequest, $this->table);
    }

    public function post($payload)
    {
        try {
            $resultRequest = self::querryInvoices('insert', $payload);
            return parent::post($resultRequest);
        } catch (\Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
    }

    public function patch($payload)
    {
        try {
            $resultRequest = self::querryInvoices('update', $payload);
            return parent::patch($resultRequest);
        } catch (\Exception $e) {
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } 
    }
    public function delete($payload)
    {
        return parent::delete(self::querryInvoices('delete',$payload));
    }


}