<?php

function createRequest($request)
{
    try                 
    { 
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', '');
        $ps= $bdd->prepare($request);
        $ps->execute();
        return $ps->fetchAll();
    }
    catch(Exception $e) 
    { 
        die('Erreur : '.$e->getMessage());
    }
}
?>