<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $errors= array();

    $requiredKeys = ['invoiceNumber','company','dateDue'];
    foreach ($requiredKeys as $field)
        if (!isset($payload[$field]))
            $errors[$field] = "Le champ '$field' n'existe pas.";

    if(!empty($errors))
       {
        echo "<script>
            window.alert(".join(',',$errors).")
        </script>";
        return;
       }
    //gestion des références 
    $ref= $payload['invoiceNumber'];
    if (!preg_match("/^[a-zA-Z0-9]$/",$ref,$tmp))
        $errors['ref'] = "La référence ne peut contenir que des caractère alphanumériques ";

    //gestion de l'ip de la compagnie
    $id_company=$payload['company'];
    if (!preg_match("/^[a-zA-Z\s-]$/",$id_company,$tmp))
        $errors['company'] = "Le nom de la compagnie ne peut contenir que des nombres";

    //gestion de la date de creation
    $created_at = $payload['dateDue'];
    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
        $errors['date_create']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';

        echo "<script>
            window.alert(".join(',',$errors).")
        </script>";
        return;

        $date= new DateTime();

        echo "<script>
            factures= 'https://api.hugoorickx.tech/factures/add'
            fetch(factures,{
                method:'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ ref :$ref , id_company: $id_company, created_at: $created_at, update_at: ".$date->format('Y-m-d')."})})
                .then((response) => { return response.json(); })
                .then((data) => { if(data.success){
                    window.alert('Facture ajoutée')
                }else{window.alert(data.message)} })
                </script>";
    
        ?>

    
</body>
</html>