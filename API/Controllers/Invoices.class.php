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

        $requiredKeys = ['name', 'type_id', 'country', 'tva', 'created_at', 'update_at'];
        foreach ($requiredKeys as $field)
            if (!isset($payload[$field]))
                $errors[$field] = "Le champ '$field' n'existe pas.";
 
        if(!empty($errors))
            throw new \Exception(join(", ", $errors), 1);

        //gestion des références 
        $ref= $payload['ref'];
        if (!preg_match("/^[a-zA-Z0-9]$/",$ref,$tmp))
            $errors['ref'] = "La référence ne peut contenir que des caractère alphanumériques ";

        //gestion de l'ip de la compagnie
        $id_company=$payload['id_company'];
        if (!preg_match("/^[0-9]$/",$id_company,$tmp))
            $errors['id_company'] = "L'ID ne peut contenir que des nombres";

        //gestion de la date de creation
        $created_at = $payload['created_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
            $errors['date_create']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';

        //gestion de la date de mise a jour
        $update_at = $payload['update_at'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $update_at))
            $errors['update_at']= 'La date de mise a jour ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';

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
        try { return parent::post(self::querryInvoices('insert', $payload)); }
        catch (\Exception $e) { return json_gen(false, $e->getMessage());  } 
    }

    public function patch($payload)
    {
        try { return parent::patch(self::querryInvoices('update', $payload)); }
        catch (\Exception $e) { return json_gen(false, $e->getMessage()); } 
    }
    public function delete($payload)
    {
        return parent::delete(self::querryInvoices('delete',$payload));
    }



}