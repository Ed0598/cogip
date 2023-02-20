import { useState } from 'react';

function LogInApp() {
  const [user, setUser] = useState(null);

  const handleLogin = async (email, password) => {
    
    const userUrl = 'http://localhost:8001/login/user';
    const userResponse = await fetch(userUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json'},
      body: JSON.stringify({ email: email })
    });
    const userData = await userResponse.json();
    if (userData.success) {
      const passwordUrl = 'http://localhost:8001/login/password';
      const passwordResponse = await fetch(passwordUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json'},
        body: JSON.stringify({ email: email, password: password })
      });
      const passwordData = await passwordResponse.json();
      if (passwordData.success) {
        setUser(email);
        console.log('Connexion réussie');
      } else {
        console.log('Mot de passe incorrect');
      }
    } else {
      console.log("L'utilisateur n'existe pas");
    }
  };

  return (
    <div>
      {user ? (
        <p>Bienvenue, {user}!</p>
      ) : (
        <LoginForm onLogin={handleLogin} />
      )}
    </div>
  );
}

function LoginForm({ onLogin }) {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
  
    const handleSubmit = (e) => {
      e.preventDefault();
      onLogin(email, password);
    };
  
    return (
      <form onSubmit={handleSubmit}>
        <label>
          Email:
          <input
            type="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
          />
        </label>
        <br />
        <label>
          Mot de passe:
          <input
            type="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
        </label>
        <br />
        <button type="submit">Se connecter</button>
      </form>
    );
  }
  
  export default LogInApp;
  