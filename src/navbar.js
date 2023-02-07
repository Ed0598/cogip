import { Box, Flex } from '@chakra-ui/react';


function Navbar () {
    return (

        <div className="footer__nav">
            <hr/>
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
        </div>


    )
}

export default Navbar;
