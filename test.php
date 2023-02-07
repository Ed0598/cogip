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

    // /***
    //  * CONTACTS
    //  * */
    // let contacts = 'http://localhost:8001/contacts/all'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les contacts"); console.log(data) })

    // contacts = 'http://localhost:8001/contacts/five'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 contacts"); console.log(data) })
        
    // contacts = 'http://localhost:8001/contacts/2'
    // fetch(contacts,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 contact"); console.log(data) })

    // contacts= 'http://localhost:8001/contacts/add'
    // fetch(contacts,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ name : "test",  company_id: 1, email:"test.test@test.com", phone:"00000000000", created_at: "2023-02-02", update_at: "2023-02-02"})})
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("ajoute un contact"); console.log(data) })
    
    // contacts= 'http://localhost:8001/contacts/update'
    // fetch(contacts,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, name : "test1",  company_id: 1, email:"test.test@test.com", phone:"00000000000", created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifier un contact"); console.log(data) })
    // // contacts= 'http://localhost:8001/contacts/delete/1'
    // // fetch(contacts,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })


    // /***
    //  * FACTURES
    //  * */
    // let factures = 'http://localhost:8001/factures/all'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les factures"); console.log(data) })

    // factures = 'http://localhost:8001/factures/five'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 factures"); console.log(data) })

    // factures = 'http://localhost:8001/factures/2'
    // fetch(factures,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 facture"); console.log(data) })

    // factures= 'http://localhost:8001/factures/add'
    // fetch(factures,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ ref : "INV000X", id_company: 1, created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("ajoute une facture"); console.log(data) })

    // factures= 'http://localhost:8001/factures/update'
    // fetch(factures,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, ref : "INV0007", id_company: 1, created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifie une facture"); console.log(data) })
    // // factures= 'http://localhost:8001/factures/delete/1'
    // // fetch(factures,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })


    // /***
    //  * COMPAGNIES
    //  * */
    // let compagnies = 'http://localhost:8001/compagnies/all'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("tous les compagnies"); console.log(data) })

    // compagnies = 'http://localhost:8001/compagnies/five'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("5 compagnies"); console.log(data) })

    // compagnies = 'http://localhost:8001/compagnies/2'
    // fetch(compagnies,{method:"GET"}) 
    //     .then((response) => { return response.json(); })
    //     .then((data) => { console.log("1 compagnie"); console.log(data) })

    // compagnies= 'http://localhost:8001/compagnies/add'
    // fetch(compagnies,{
    //     method:"POST",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ name : "test", type_id: 1,  country:"belgique", tva:"5555",  created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("ajoute une compagnie"); console.log(data) })

    // compagnies= 'http://localhost:8001/compagnies/update'
    // fetch(compagnies,{
    //     method:"PATCH",
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({id:1, name : "testmdoif", type_id: 1,  country:"belgique", tva:"5555",  created_at: "2023-02-02", update_at: "2023-02-02"})})
    //   .then((response) => { return response.json(); })
    //   .then((data) => { console.log("modifie une compagnie"); console.log(data) })
    // // compagnies= 'http://localhost:8001/compagnies/delete/1'
    // // fetch(compagnies,{ method:"DELETE" })
    // // .then((response) => { return response.json(); })
    // // .then((data) => { console.log(data) })

    user= 'http://localhost:8001/password'
    fetch(user, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
                            id:1,
                            first_name: "edouard",
                            role_id:1,
                            last_name:"de romree",
                            email: "edouard0598@outlook.be",
                            password:"<?= sha1('zizi')?>",
                            created_at: "2023-02-07",
                            update_at: "2023-02-07"})
    })
        .then((response) => {return response.json(); })
        .then((data) => { console.log("connexion user"); console.log(data) })

    
    </script> 
</body>
</html>