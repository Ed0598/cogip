import * as React from 'react';
import ReactDOM from 'react-dom/client';
//import Footer from './Footer';
//import Navigation from './Navigation';
//import Manage from './Manage';
//import Work from './Work';
import App from './App';
//import SmallTable from './SmallTable';
import {BrowserRouter} from "react-router-dom";


// import `ChakraProvider` component
//import { ChakraProvider, Link } from '@chakra-ui/react'



const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <BrowserRouter>
        <App />
    </BrowserRouter>
);



