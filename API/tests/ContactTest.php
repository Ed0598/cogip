<?php

use PHPUnit\Framework\TestCase;
use App\Controller\Invoices;

class ContactTest extends Testcase
{
    public function testContactAll():void{
        $contact= new Invoices();

        $this->expectException(\Exception::class);
        $contact->getAll();
    }

}