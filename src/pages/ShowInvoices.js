import Footer from '../Footer';
import Navigation from '../Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayInvoices from '../DisplayInvoices';


function ShowInvoices() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                <DisplayInvoices table="factures" />
                <hr />
               
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowInvoices;