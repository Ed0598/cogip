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
                <Link to="/Dashboard" id="Sign_up">Sign Up</Link>
                <Link to="/Dashboard">Log In</Link>

                </div>
                <Menuburg />
            </nav>
    );
}

export default Navigation;