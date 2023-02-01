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
    $last= 'SELECT * from '.$table.'order by created_at DESC limit 5 ';
    $ps= $bdd->prepare($last);
    $ps->execute();
    foreach($ps as $elem){
        echo "<tr>
        <td>".$elem['name']."</td>
        <td>".$elem['phone']."</td>
        <td>".$elem['email']."</td>
        <td>".$elem['company_id']."</td>
        <td>".$elem['created_at']."</td>
        </tr>";
    }
    return $ps->fetchAll();
};

?>
