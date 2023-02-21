import Footer from '../Home/Footer';
import Navigation from '../Home/Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import Table from '../Tables/Table';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayContact from '../Display/DisplayContact';


function ShowContacts() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                <DisplayContact table="contacts" />
                <hr />
                
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowContacts;