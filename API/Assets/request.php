<?php

function createRequest($request)
{
    try                 
    { 
        $bdd = new PDO('mysql:host=hugoorickx.tech:3306;dbname=u716273791_cogip;charset=utf8', 'u716273791_cogip', '/A9gHHj31M@f');
        $ps= $bdd->prepare($request);
        $ps->execute();
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e) 
    { 
        throw new \Exception('Erreur : '.$e->getMessage());
    }
}
?>

