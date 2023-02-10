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
             addUserUrl= 'https://api.hugoorickx.tech/adduser'
            fetch(addUserUrl,
            {
                method:'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username : "test",email: 'coucou.test@test.com', password: 'salut'})})
                .then((response) => { return response.json(); })
                .then((data) =>
                { 
                    console.log("ajoute un utilisateur "); console.log(data) 
                });


    // /***
    //  * CONTACTS
    //  * */
    // let contacts = 'https://api.hugoorickx.tech/contacts/all'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les contacts"); console.log(data) })

    // contacts = 'https://api.hugoorickx.tech/contacts/five'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 contacts"); console.log(data) })
        
    // contacts = 'https://api.hugoorickx.tech/contacts/2'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 contact"); console.log(data) })

    // contacts= 'https://api.hugoorickx.tech/contacts/add'
    // fetch(contacts,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ name : "test12",  company_id: 'sqlut', email:"test.test@test.com1", phone:"00000sad000000", created_at: "2023-02-02", update_at: "2023-02-02"})})
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("ajoute un contact"); console.log(data) })
    
    // contacts= 'https://api.hugoorickx.tech/contacts/update'
    // fetch(contacts,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, name : "test1&",  company_id: "1er", email:"test.test@test.co12m", phone:"0000000asd0000", created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifier un contact"); console.log(data) })
    // // contacts= 'https://api.hugoorickx.tech/contacts/delete/1'
    // // fetch(contacts,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })


    // /***
    //  * FACTURES
    //  * */
    // let factures = 'https://api.hugoorickx.tech/factures/all'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les factures"); console.log(data) })

    // factures = 'https://api.hugoorickx.tech/factures/five'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 factures"); console.log(data) })

    // factures = 'https://api.hugoorickx.tech/factures/2'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 facture"); console.log(data) })

    // factures= 'https://api.hugoorickx.tech/factures/add'
    // fetch(factures,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ ref : "INV0!@#$%^&&*()00X", id_company: 1, created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("ajoute une facture"); console.log(data) })

    // factures= 'https://api.hugoorickx.tech/factures/update'
    // fetch(factures,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, ref : "INV0007&", id_company: 1, created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifie une facture"); console.log(data) })
    // // factures= 'https://api.hugoorickx.tech/factures/delete/1'
    // // fetch(factures,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })


    // /***
    //  * COMPAGNIES
    //  * */
    // let compagnies = 'https://api.hugoorickx.tech/compagnies/all'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les compagnies"); console.log(data) })

    // compagnies = 'https://api.hugoorickx.tech/compagnies/five'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 compagnies"); console.log(data) })

    // compagnies = 'https://api.hugoorickx.tech/compagnies/2'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 compagnie"); console.log(data) })

    // compagnies= 'https://api.hugoorickx.tech/compagnies/add'
    // fetch(compagnies,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ name : "test#$%1", type_id: 1,  country:"belgique", tva:"5555",  created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("ajoute une compagnie"); console.log(data) })

    // compagnies= 'https://api.hugoorickx.tech/compagnies/update'
    // fetch(compagnies,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, name : "testmdoif1", type_id: 1,  country:"belgique", tva:"5555",  created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifie une compagnie"); console.log(data) })
    // // compagnies= 'https://api.hugoorickx.tech/compagnies/delete/1'
    // // fetch(compagnies,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })
    
    </script> 
</body>
</html>