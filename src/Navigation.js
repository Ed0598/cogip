import Menuburg from './Menu';
function Navigation() {
    return (
            <nav>
                <h2>
                    COGIP
                </h2>
                <div className="nav__link">
                    <a href="#">
                        Home
                    </a>
                    <a href="#">
                        Invoices
                    </a>
                    <a href="#">
                        Companies
                    </a>
                    <a href="#">
                        Contacts
                    </a>
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