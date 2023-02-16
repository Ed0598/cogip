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
    $errors=array();

    foreach (['name', 'company_id', 'email', 'phone', 'created_at', 'updated_at'] as $field)
        if (!isset($payload[$field]))
            $errors[$field] = "Le champ '$field' n'existe pas.";

    if(!empty($errors)){
        echo "<script>
                window.alert(".join(',',$errors).")
            </script>";
            return;
    }
        

    //gestion du nom
    $name= $payload['name'];
    if (!preg_match("/^[a-zA-Z\s-]$/", $name, $tmp))
        $errors['name']= 'Le nom ne peut contenir que des lettres';

    //gestion de l'id de la compagnie
    $company_id = $payload['company_id'];
    if (!preg_match("/^[0-9]$/", $company_id, $tmp))
        $errors['company_id']= 'Le numéro de compagnie ne peut contenir que des nombres';

    //gestion de l'email
    $email = $payload['email'];
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email, $tmp))
        $errors['email']="L'adresse email n'est pas valide ";

    //gestion numéro de téléphone
    $phone = $payload['phone'];
    if (!preg_match("/^[0-9]$/", $phone, $tmp))
        $errors['phone']= 'Le numéro de téléphone ne peut contenir que des nombres';

    //gestion de la date de creation
    $created_at = $payload['created_at'];
    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $created_at))
        $errors['created_at']= 'La date de creation ne peut contenir que des nombres et doit etre sous la forme YYYY-MM-DD';

        if(!empty($errors)){
            echo "<script>
                    window.alert(".join(',',$errors).")
                </script>";
                return;
        }
        $date= new DateTime();

        echo "<script>
            contacts= 'https://api.hugoorickx.tech/contacts/add'
            fetch(contacts,{
                method:'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name : $name,  company_id: $company_id, email:$email, phone:$phone, created_at: $created_at, update_at: ".$date->format('Y-m-d')." })})
                .then((response) => { return response.json(); })
                .then((data) => { if(data.success){
                    window.alert('Contact ajouté')
                }else{window.alert(data.message)} })
            </script>";
    ?>
    
</body>
</html>