import Footer from '../Home/Footer';
import Navigation from '../Home/Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import Table from '../Tables/Table';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayInvoices from '../Display/DisplayInvoices';


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