import { Box, Flex } from '@chakra-ui/react';


function Navbar () {
    return (

        <div className="footer__nav">
            <hr className='hr_grey'/>
            <div className="nav__link">
                    <a href="#">
                        HOME
                    </a>
                    <a href="#">
                        INVOICES
                    </a>
                    <a href="#">
                        COMPANIES
                    </a>
                    <a href="#">
                        CONTACTS
                    </a>
                    <a href="#">
                        PRIVACY POLICY
                    </a>
                </div>
                <div className='copyright'>
                    <p>Copyright © 2022 • COGIP Inc.</p>
                </div>
        </div>


    )
}

export default Navbar;
