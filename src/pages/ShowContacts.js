import Footer from '../Footer';
import Navigation from '../Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayContact from '../DisplayContact.js';


function ShowContacts() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                 <DisplayContact table="compagnies" display="1" 
                 name="name" tva="tva" country="country" type="type" />
                 <div className='over'>
                    <Table table='factures' display="five" 
                    id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
                    th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowContacts;