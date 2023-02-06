import Menuburg from './Menu';
function Header() {
    return (
        <header>
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
                    <a href="#">
                        Sign up
                    </a>
                    <a href="#">
                        Login
                    </a>
                </div>
                <Menuburg />
            </nav>
        </header>
    );
}

export default Header;