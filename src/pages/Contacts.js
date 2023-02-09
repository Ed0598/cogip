import Footer from '../Footer';
import Navigation from '../Navigation';
import Table from '../Table';
import Rectangle_blanc from '../assets/images/Rectangle_blanc.svg';

import { ChakraProvider } from '@chakra-ui/react'


function Contacts() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <img src={Rectangle_blanc} alt="#" />
            </header>
            <main>
                <h1>
                    All Contacts
                </h1>
                <div className='over'>
                    <Table table="contacts" display="all"
                    id="id" td1="name" td2="phone" td3="email" td4="name_companie" td5="created_at"
                    th1="Name" th2="Phone" th3="Mail" th4="Company" th5="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default Contacts;