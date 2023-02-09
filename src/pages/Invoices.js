import Footer from '../Footer';
import Navigation from '../Navigation';
import Table from '../Table';


import { ChakraProvider } from '@chakra-ui/react'


function Invoices() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
            </header>
            <main>
                 <div className='rectangle_jaune'>
                    <h1 className='invoices__h1'>
                        All Invoices
                    </h1>
                </div>
            <div className='over'>
                    <Table table='factures' display="all" 
                    id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
                    th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default Invoices;