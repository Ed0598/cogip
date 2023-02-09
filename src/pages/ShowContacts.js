import Footer from '../Footer';
import Navigation from '../Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg'

import { ChakraProvider } from '@chakra-ui/react'
import DisplayContact from '../DisplayContact.js';


function ShowContacts() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                 <DisplayContact table="compagnies" display="all" 
                 name="name" tva="tva" country="country" type="type" />
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowContacts;