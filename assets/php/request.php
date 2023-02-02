<?php

function createRequest($request)
{
    try                 { $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', ''); }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }

    $ps= $bdd->prepare($request);
    $ps->execute();
    return $ps->fetchAll();
}

function selectHome($table){
    try                 { $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', ''); }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    $last= 'SELECT * from '.$table.' order by created_at DESC limit 5 ';
    $ps= $bdd->prepare($last);
    $ps->execute();
    return $ps->fetchAll();
};
//SELECT companies.name, companies.TVA, companies.country, companies.created_at, types.name AS type FROM companies JOIN types ON companies.type_id = types.id;
function selectTables($table,$row)
{
    try                 { $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', ''); }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    $tables= 'SELECT * from '.$table.' order by ' .$row. ' DESC';
    $ps=$bdd->prepare($tables);
    $ps->execute();
    return $ps->fetchAll();
};

function selectId($table,$id)
{
    try                 { $bdd = new PDO('mysql:host=127.0.0.1;dbname=cogip;charset=utf8', 'root', ''); }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    $selectid= 'SELECT * FROM '.$table.' WHERE id='.$id;
    $ps= $bdd->prepare($selectid);
    $ps->execute();
    return $ps->fetchAll();
};
?>