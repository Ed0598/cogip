
## Installation

Start the API

```bash
  ### Create a DB named cogip and execute inside the file cogip.sql

  php -S localhost:8001 -t API/
```
    
## API Reference

#### Get all items:

| Method | Endpoint | Body | Response |
| - | - | - | - |
| GET | /[compagnies - factures - contacts]/all | | Return every elements |
| GET | /[compagnies - factures - contacts]/five | | Return the last 5 elements |
| GET | /[compagnies - factures - contacts]/[id] | | Return the element with the id [id]|
| GET | /contacts/company/[id] | | Return every contact in the company with the id [id]|
| POST | /compagnies/ | `{ name : <string>, type_id: <int>,  country:<string>, tva:<string>,  phone:<string>,  created_at: <date>, update_at: <date>}` | Add compagny |
| POST | /generate-jwt | `{ userId : <string> }` | Generate a toekn to interact with the API |
| POST | /contacts/ | `{ name : <string>,  company_id: <int>, email:<string>, phone:<string>, created_at: <date>, update_at: <date>}` | Add contact |
| POST | /factures/ | `{ ref : <string>, id_company: <int>, created_at: <date>, update_at: <date>}` | Add facture |
| POST | /login/user | `{ email : <string> }` | check if email exist |
| POST | /login/password | `{ email : <string>, password: <string> }` | check if email exist and password exist |
| POST | /login/adduser | `{ username : <string>, email : <string>, password : <string>}` | Create user |
| PATCH | /compagnies/ | `{ id:<id>, name : <string>, type_id: <int>,  country:<string>, tva:<string>,  phone:<string>,  created_at: <date>, update_at: <date>}` | Update compagny |
| PATCH | /contacts/ | `{ id:<id>, name : <string>,  company_id: <int>, email:<string>, phone:<string>, created_at: <date>, update_at: <date>}` | Update contact |
| PATCH | /factures/ | `{ id:<id>, ref : <string>, id_company: <int>, created_at: <date>, update_at: <date>}` | Update facture |
| DELETE | /[compagnies - factures - contacts]/[id] | | Remove the element with the id [id] |

### Token:

To use the DB you must include the token in the header of each request
```
headers: { key:'token'}
```

#### Return values:

```JS
JSON
{
    success: [true - false],
    message: [content - success message]
}
```

## Authors

- [@Hugo-Goorickx](https://github.com/Hugo-Goorickx)
- [@Edouard de Romrée](https://github.com/Ed0598)
- [@Lysie Soyez](https://github.com/LysieSoyez)
- [@Nathalie Goffette](https://github.com/nathaliegoffette)


## Features

Some screens of our features : 

Home : <img width="1508" alt="Capture d’écran 2023-02-21 à 16 41 41" src="https://user-images.githubusercontent.com/117506113/220393633-f5b3eda4-87e5-487b-854e-142c14334c1f.png">

On the home page the 5 latest invoices are displayed : 
<img width="1471" alt="Capture d’écran 2023-02-21 à 16 41 53" src="https://user-images.githubusercontent.com/117506113/220394074-c1b2253a-4bfc-4566-83c2-698f73a203a4.png">

On the home page the 5 latest contatcs are displayed : 

<img width="1473" alt="Capture d’écran 2023-02-21 à 16 41 59" src="https://user-images.githubusercontent.com/117506113/220394248-b79075f6-d308-4b4a-92e1-a79b3e3fd1ca.png">

On the home page the 5 latest companies are displayed : 

<img width="1483" alt="Capture d’écran 2023-02-21 à 16 42 05" src="https://user-images.githubusercontent.com/117506113/220394375-13c653fc-b748-47aa-ab61-7a3cf7086e97.png">


Dashboard : 

<img width="1501" alt="Capture d’écran 2023-02-21 à 16 43 51" src="https://user-images.githubusercontent.com/117506113/220394708-998e0f37-be36-4567-b8e1-ccc676ea3c96.png">

