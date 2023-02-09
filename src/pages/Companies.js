import Footer from '../Footer';
import Navigation from '../Navigation';
import Manage from '../Manage';
import Work from '../Work';
import Table from '../Table';

import { ChakraProvider } from '@chakra-ui/react'


function Companies() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
            </header>
            <main>
                <div className='rectangle_jaune'>
                    <h1 className='companies__h1'>
                        All Companies
                    </h1>
                </div>
                <div className='over'>
                    <Table table="compagnies" display="all"
                    id="id" td1="name" td2="tva" td3="country" td4="type" td5="created_at"
                    th1="Name" th2="TVA" th3="Country" th4="Type" th5="Created at" />
                </div>
            </main>
            <Footer />
        </ChakraProvider>
)
    };

    export default Companies;