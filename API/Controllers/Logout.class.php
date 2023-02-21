<?php
namespace App\Controller;

class Logout extends Controler{

    public function unset()
    {

    if (isset($_POST['logout'])){
        session_unset();
        header('Location: ../index.php');
    }
    }
}