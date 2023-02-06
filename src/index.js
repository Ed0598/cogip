import * as React from 'react';
import ReactDOM from 'react-dom/client';
import Footer from './footer';
import Navigation from './Navigation';
import Manage from './Manage';


// 1. import `ChakraProvider` component
import { ChakraProvider, Link } from '@chakra-ui/react'


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <ChakraProvider>
        <header>
            <Navigation />
            <Manage />
        </header>
        <Footer />
    </ChakraProvider>
);



