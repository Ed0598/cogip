import Footer from '../Home/Footer';
import Navigation from '../Home/Navigation';
import Manage from '../Home/Manage';
import Work from '../Home/Work';
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