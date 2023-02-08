import { Box, Flex } from '@chakra-ui/react';
import {Link} from 'react-router-dom';


function Navbar () {
    return (

        <div className="footer__nav">
            <hr className='hr_grey'/>
            <div className="nav__link">
                    <Link to="/">HOME</Link>
                    <Link to="/Invoices">Invoices</Link>

                    <Link to="/Companies">Companies</Link>

                    <Link to="/Contacts">Contacts</Link>

                    <Link to="/PrivacyPolicy">Privacy Policy</Link>

                </div>
                <div className='copyright'>
                    <p>Copyright © 2022 • COGIP Inc.</p>
                </div>
        </div>


    )
}

export default Navbar;
