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
        
        $required_fields = ['companyName', 'type', 'country', 'TVA', 'createdAt'];
        foreach ($required_fields as $field)
            if (!isset($_POST[$field]))
                $errors[$field] = "Le champ '$field' n'existe pas.";

        if(!empty($errors))
        {
            echo "<script>
                    window.alert(".join(',',$errors).")
                </script>";
            return;
        }

        //gestion du nom
        $name= $_POST['companyName'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$name,$tmp))
            $errors['name']= 'Le nom ne peut contenir que des lettres';

        //gestion du type_id
        $type_id=$_POST['type'];
        if(!preg_match("/^[0-9]$/", $type_id,$tmp));
            $errors['type_id']='Le identifiant du type ne peut contenir que des chiffres';

        //gestion du pays
        $country=$_POST['country'];
        if (!preg_match("/^[a-zA-Z\s-]$/",$country,$tmp));
            $errors['country']= 'Le pays ne peut contenir que des lettres';

        //gestion TVA
        $tva=$_POST["TVA"];
        if(!preg_match("/^[0-9]$/", $tva,$tmp))
            $errors['tva']='Le numéro de tva ne peut contenir que des chiffres';

        //gestion de la date de creation
        $created_at = $_POST['createdAt'];
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
            $errors['created_at']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';
    
            if(!empty($errors))
            {
                echo "<script>
                        window.alert(".join(',',$errors).")
                    </script>";
                    return;
            }
$date= new DateTime();
            echo 
            "<script>
                compagnies= 'https://api.hugoorickx.tech/compagnies/add'
                fetch(compagnies,{
                    method:'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name : $name, type_id: $type_id,  country:$country, tva:$tva,  created_at: $created_at, update_at: ".$date->format('Y-m-d')." })})
                    .then((response) => { return response.json(); })
                    .then((data) => { 
                        if(data.success){
                            window.alert('Compagnie ajoutée')
                        }else{window.alert(data.message)}
            </script>";
        ?>
    
    
</body>
</html>