import Footer from './Footer';
import Navigation from './Navigation';
import Manage from './Manage';
import Work from './Work';
//import App from './App';
import SmallTable from './SmallTable';
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
            <table>
                <SmallTable table='contacts' display="five" />
            </table>
            <SmallTable />
            <Work />
            <Footer />
        </ChakraProvider>
)
    };

    export default Home;