import Footer from '../Footer';
import Navigation from '../Navigation';
import Manage from '../Manage';
import Work from '../Work';
import Table from '../Table';


import { ChakraProvider } from '@chakra-ui/react'


function Invoices() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
            </header>
            <h1 className='invoices__h1'>All Invoices</h1>
            <div className='rectangle_jaune'></div>
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

    export default Invoices;