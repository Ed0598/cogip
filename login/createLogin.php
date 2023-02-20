<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
            let addUserUrl= 'https://api.hugoorickx.tech/login/adduser'
            fetch(addUserUrl,
            {
                method:'post',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ 
                    username:"<?= $_POST['usernamee']?>",
                    email:'<?=$_POST['email']?>',
                    password:'<?=sha1($_POST['password'])?>'
                })})
                .then((response) => { return response.json(); })
                .then((data) => { console.log("ajoute un utilisateur "); console.log(data) });
    </script>
</body>
</html>