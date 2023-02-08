import Footer from '../Footer';
import Navigation from '../Navigation';
import Manage from '../Manage';
import Work from '../Work';
//import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react'


function PrivacyPolicy() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
            </header>
            <h1>Privacy Policy</h1>
            
        
            
            <Footer />
        </ChakraProvider>
)
    };

    export default PrivacyPolicy;