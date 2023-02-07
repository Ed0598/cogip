<?php

namespace App\Controller ;

class Invoices extends Controler
{
    private function querryInvoices($type,$payload)
    {
        if ($type == 'delete')
            return "DELETE FROM invoices where id= $payload";
        

        $ref= $payload['ref'];
        $id_company=$payload['id_company'];
        $created_at=$payload['created_at'];
        $update_at=$payload['update_at'];

        if($type == 'insert')
            return "INSERT into invoices (ref,id_company,created_at,update_at) VALUES ('".$ref."','".$id_company."','".$created_at."','".$update_at."');";

        return "UPDATE invoices SET ref='$ref', id_company='$id_company',  created_at='$created_at', update_at='$update_at'";
    }

    private $defaultRequest='SELECT invoices.ref, invoices.id_company, invoices.created_at, invoices.update_at AS name FROM invoices JOIN companies ON companies.id = invoices.id_company ';
    private $table = 'invoices';

    public function __construct()
    {
        parent::__construct($this->defaultRequest, $this->table);
    }

    public function post($payload)
    {
        return parent::post(self::querryInvoices('insert',$payload));
    }

    public function patch($payload)
    {
        return parent::patch(self::querryInvoices('update',$payload));
    }
    public function delete($payload)
    {
        return parent::delete(self::querryInvoices('delete',$payload));
    }


}