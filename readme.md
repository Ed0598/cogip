
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

