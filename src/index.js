import * as React from 'react';
import ReactDOM from 'react-dom/client';
import Menuburg from './Menu';
import Footer from './footer';
import Header from './Header';


// 1. import `ChakraProvider` component
import { ChakraProvider, Link } from '@chakra-ui/react'


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <ChakraProvider>
        <Header />
        <Footer />
    </ChakraProvider>
);



