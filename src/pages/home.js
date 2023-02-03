import * as React from 'react';
import ReactDOM from 'react-dom/client';

// 1. import `ChakraProvider` component
import { ChakraProvider } from '@chakra-ui/react'

import Header from '../Header';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <ChakraProvider>

    <Header />

    </ChakraProvider>

);



