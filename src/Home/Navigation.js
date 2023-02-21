import Menuburg from './Menu';
import {Link} from 'react-router-dom';


function Navigation() {
    return (
            <nav>
                <h2>
                    COGIP
                </h2>
                <div className="nav__link">
                <Link to="/">Home</Link>

                <Link to="/Invoices">Invoices</Link>

                <Link to="/Companies">Companies</Link>

                <Link to="/Contacts">Contacts</Link>

                </div>
                <div className="nav__log">
                <Link to="/PageLogIn" id="Sign_up" className='signup'>Sign Up</Link>
                <Link to="/PageLogIn" className='login'>Log In</Link>

                </div>
                <Menuburg />
            </nav>
    );
}

export default Navigation;