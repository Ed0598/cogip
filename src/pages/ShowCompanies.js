import Footer from '../Footer';
import Navigation from '../Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayCompany from '../DisplayCompany.js';
import ContactPeople from '../Contact_people';


function ShowCompanies() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                <DisplayCompany table="compagnies" />
                <hr />
                <ContactPeople table="contacts" display="company" />
                <div className='over'>
                    <Table table='factures' display="five" idLien="'/' + id"
                    id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
                    th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowCompanies;