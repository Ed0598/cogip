import * as React from 'react';
import ReactDOM from 'react-dom/client';
import Footer from './Footer';
import Navigation from './Navigation';
import Manage from './Manage';
import Work from './Work';
import Table from './Table';


// 1. import `ChakraProvider` component
import { ChakraProvider} from '@chakra-ui/react'



const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <ChakraProvider>
        <header>
            <Navigation />
            <Manage />
        </header>
        <div className='over'>
        <Table table='factures' display="five" id="id" td1="ref" td2="update_at" td3="name" td4="created_at" th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
        </div>
        <Work />
        <Footer />
    </ChakraProvider>
);



