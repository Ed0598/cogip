import React, { useState } from 'react';

function CreateLogIn() {
  const [username, setUsername] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleSubmit = (event) => {
    event.preventDefault();
    const addUserUrl= 'https://api.hugoorickx.tech/login/adduser';
    fetch(addUserUrl, {
      method:'post',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ 
        username: username,
        email: email,
        password: password
      })
    })
    .then(response => response.json())
    .then(data => {
      console.log('ajout utilisateur réussi');
      console.log(data);
    })
    .catch(error => console.error(error));
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Username:
        <input type="text" value={username} onChange={(event) => setUsername(event.target.value)} />
      </label>
      <br />
      <label>
        Email:
        <input type="email" value={email} onChange={(event) => setEmail(event.target.value)} />
      </label>
      <br />
      <label>
        Password:
        <input type="password" value={password} onChange={(event) => setPassword(event.target.value)} />
      </label>
      <br />
      <button type="submit">Submit</button>
    </form>
  );
}

export default CreateLogIn;

