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
    
            async function verifyAndGetPassword(test)
            {
                userUrl= 'http://localhost:8001/login/user'
                userResponse= await fetch(userUrl,{
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', key:test },
                        body: JSON.stringify ({ email:"<?= $_POST['username']?>"})

                })
                let userData= await userResponse.json()
                if (userData.success){
                    passwordUrl= 'http://localhost:8001/login/password'
                    passwordResponse= await fetch (passwordUrl,{
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', key:test },
                        body: JSON.stringify ({ email:"<?= $_POST['username']?>",
                                                password:"<?= sha1($_POST['password'])?>"})
                    })
                    let passwordData= await passwordResponse.json()
                    if (passwordData.success)
                        console.log("Connexion réussie")
                    console.log("Connexion ratee")
                } else
                    console.log("Connexion ratee");

            }
            
            // let test= 'http://localhost:8001/generate-jwt'
            // fetch(test,{
            //     method:"POST",
            //     headers: { 'Content-Type': 'application/json' , key:'gen'},
            //     body: JSON.stringify({ userId : "test"})})
            //     .then((response) => { return response.json(); })
            //     .then((data) => { verifyAndGetPassword(key = data.jwt)})
    </script>        
</body>
</html>
