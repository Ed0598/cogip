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
            async function verifyAndGetPassword()
            {
                userUrl= 'https://api.hugoorickx.tech/user'
                userResponse= await fetch(userUrl,{
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify ({ email:"<?= $_POST['username']?>"})

                })
                let userData= await userResponse.json()
                console.log("Verification de l'utilisateur")
                console.log(userData)
                console.log(userData.success)
                if (userData.success){
                    passwordUrl= 'https://api.hugoorickx.tech/password'
                    passwordResponse= await fetch (passwordUrl,{
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify ({ email:"<?= $_POST['username']?>",
                                                password:"<?= $_POST['password']?>"})
                    })
                    console.log("<?= $_POST['username']?>");
                    let passwordData= await passwordResponse.json()
                    console.log("Connexion réussie")
                    console.log(passwordData)
                }
            }
            verifyAndGetPassword()

            // addUserUrl= 'https://api.hugoorickx.tech/adduser'
            // fetch(addUserRl,
            // {
            //     method:'post'
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify({ first_name : "test",email: 'coucou.test@test.com', password: 'salut'})})
            //     .then((response) => { return response.json(); })
            //     .then((data) =>
            //     { 
            //         console.log("ajoute un utilisateur "); console.log(data) 
            //     });

    </script>        
</body>
</html>
