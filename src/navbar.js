import { Box, } from '@chakra-ui/react';


function Navbar () {
    return (

        <Box className="footer__nav" spacing='8px'>
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
        </Box>


    )
}

export default Navbar;
