import Footer from '../Footer';
import Navigation from '../Navigation';
import Manage from '../Manage';
import Work from '../Work';
import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react'


function Contacts() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
            </header>
            <h1>All Contacts</h1>
            <div className='over'>
        <Table table='factures' display="five" 
        id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
        th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
        </div>
            <Table />
            <Footer />
        </ChakraProvider>
)
    };

    export default Contacts;