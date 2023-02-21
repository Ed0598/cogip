import React, { useState } from 'react';
import { useHistory } from 'react-router';

function CreateLogIn() {
  const [username, setUsername] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const history = useHistory();

  const handleFormSubmit = (event) => {
    event.preventDefault();
    let addUserUrl = 'http://localhost:8001/login/adduser';
    fetch(addUserUrl, {
      method: 'post',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        username: username,
        email: email,
        password: password
      })
    })
    .then(response => response.json())
    .then(data => {
      console.log("Ajout d'un utilisateur");
      console.log(data);
      // Rediriger l'utilisateur vers la page de connexion après l'ajout réussi
      history.push('/login');
    })
    .catch(error => console.error(error));
  };

  return (
    <form onSubmit={handleFormSubmit}>
      <label>
        Nom d'utilisateur :
        <input type="text" value={username} onChange={(event) => setUsername(event.target.value)} />
      </label>
      <label>
        Adresse e-mail :
        <input type="email" value={email} onChange={(event) => setEmail(event.target.value)} />
      </label>
      <label>
        Mot de passe :
        <input type="password" value={password} onChange={(event) => setPassword(event.target.value)} />
      </label>
      <button type="submit">Ajouter l'utilisateur</button>
    </form>
  );
}

export default CreateLogIn;