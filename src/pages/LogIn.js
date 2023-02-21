import { useState, useEffect } from "react";
import {Link} from "react-router-dom";
import LogInApp from "../LogIn/connectLogIn";
import CreateLogIn from "../LogIn/CreateLogIn";

function PageLogIn() {
  const [isRightPanelActive, setIsRightPanelActive] = useState(false);

  useEffect(() => {
    const signUpButton = document.getElementById("signUp");
    signUpButton.addEventListener("click", handleButtonClick);

    return () => {
      signUpButton.removeEventListener("click", handleButtonClick);
    };
  });

  const handleButtonClick = () => {
    setIsRightPanelActive(!isRightPanelActive);
  };

  return (
    <>
      <main className="main">
        <div className={`container ${isRightPanelActive ? "right-panel-active" : ""}`} id="container">
          <div className="form-container sign-up-container">
            <form action="createLogin.php" method="post">
              <h1>Create Account</h1>
              <input type="text" placeholder="Name" name="username" />
              <input type="email" placeholder="Email" name="email" />
              <input type="password" placeholder="Password" name="password" />
              <Link to="/Dashboard">
              <button type="submit" name="signup" id="signUp">
                Sign Up
              </button>
              </Link>
            </form>
          </div>
          <div className="form-container sign-in-container">
            <form action="connectLogin.php" method="post">
              <h1>Sign in</h1>
              <input type="text" placeholder="email" name="username" />
              <input type="password" placeholder="Password" name="password" />
              <Link to="/Dashboard">
              <button>Sign In</button>
              </Link>
            </form>
          </div>
          <div className="overlay-container">
            <div className="overlay">
              <div className={`overlay-panel ${isRightPanelActive ? "overlay-right" : ""}`}>
                {/* <h1 id="title">{isRightPanelActive ? "Welcome back" : "Hello, Friend!"}</h1> */}
                {/* <button className="ghost" id="signUp">
                  {isRightPanelActive ? "Sign In" : "Sign Up"}
                </button> */}
                
              </div>
            </div>
          </div>
        </div>
      </main>
      {/* <LogInApp />
      <CreateLogIn /> */}
    </>
  );
}

export default PageLogIn;
