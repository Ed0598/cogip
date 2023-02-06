<?php

namespace App\Controller ;

class invoices extends Controler
{

    private $defaultRequest='SELECT invoices.ref, invoices.id_company, invoices.created_at, invoices.update_at AS name FROM invoices JOIN companies ON companies.id = invoices.company_id';
    private $table = 'invoices';

    public function __construct()
    {
        parent::construct()
    }


}