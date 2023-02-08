import Menuburg from './Menu';
import {Link} from 'react-router-dom';


function Navigation() {
    return (
            <nav>
                <h2>
                    COGIP
                </h2>
                <div className="nav__link">
                <Link to="/">HOME</Link>

                <Link to="/Invoices">Invoices</Link>

                <Link to="/Companies">Companies</Link>

                <Link to="/Contacts">Contacts</Link>

                </div>
                <div className="nav__log">
                    <a href="#" id="Sign_up">
                        Sign up
                    </a>
                    <a href="#" id="Login">
                        Login
                    </a>
                </div>
                <Menuburg />
            </nav>
    );
}

export default Navigation;