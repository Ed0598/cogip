<?php

// use PHPUnit\Framework\TestCase;
use App\Controller\Contacts;
use App\Controller;

// class ContactTest extends Testcase
// {
//     public function testContactAll():void{
//         $contact= new Invoices();

//         $this->expectException(\Exception::class);
//         $contact->getAll();
//     }

// }

use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase {
  public function testPostMethod() {
    $contact = new Contacts();
    
    // Test with valid data
    $result = $contact->getAll();
    $this->assertEquals($result, true);
    
    // Test with invalid data
    // $result = $contact->getAll();
    // $this->assertEquals($result, false);
  }
}
