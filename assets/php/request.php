<?php

function selectHome($table){
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
    $last= 'SELECT * from '.$table.' order by created_at DESC limit 5 ';
    $ps= $bdd->prepare($last);
    $ps->execute();
    return $ps->fetchAll();
};

function selectTables($table,$row)
{
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    $tables= 'SELECT * from '.$table.' order by' .$row. ' DESC';
    $ps=$bdd->prepare($tables);
    $ps->execute();
};

function selectId($table,$id)
{
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

    $selectid= 'SELECT * FROM'.$table.'WHERE id='.$id;
    $ps= $bdd->prepare($selectid);
    $ps->execute();
};



?>
