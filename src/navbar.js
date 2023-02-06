import { Box, Flex } from '@chakra-ui/react';


function Navbar () {
    return (

        <Flex className="footer__nav" >
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
        </Flex>


    )
}

export default Navbar;
