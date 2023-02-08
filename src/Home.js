import Footer from './Footer';
import Navigation from './Navigation';
import Manage from './Manage';
import Work from './Work';
//import App from './App';
import Table from './Table';
//import {createBrowserRouter, RouterProvider} from "react-router-dom";


// import `ChakraProvider` component
import { ChakraProvider } from '@chakra-ui/react'



function Home() {
    return (
        <ChakraProvider>    
            <header>
                <Navigation />
                <Manage />
            </header>
            <div className='over'>
        <Table table='factures' display="five" 
        id="id" td1="ref" td2="update_at" td3="name" td4="created_at" 
        th1="Invoice number" th2="Dates due" th3="Company" th4="Created at" />
        </div>
            <Table />
            <Work />
            <Footer />
        </ChakraProvider>
)
    };

    export default Home;