import Footer from '../Home/Footer';
import Navigation from '../Home/Navigation';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';
import TableFacture from '../Tables/TableFacture';

import { ChakraProvider } from '@chakra-ui/react';
import DisplayCompany from '../Display/DisplayCompany';
import ContactPeople from '../Display/ContactPeople';


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
                    <TableFacture table='factures' display="company"
                    id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
                    th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default ShowCompanies;