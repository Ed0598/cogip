import {
    Button,
    Select,
    Input,
    FormControl,
    FormLabel,
    FormErrorMessage,
    FormHelperText,
} from '@chakra-ui/react'
import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

    
     
function FormInvoice(props) {
    const [data, setData] = useState([]);
    let { id } = useParams();

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.factures;
        fetch(url, { method: 'POST' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data)
    return (
        
            <FormControl isRequired>
                <div className='form_label'>
                    <FormLabel>Invoice Number: </FormLabel>
                    <Input placeholder='Invoice Number' name="invoiceNumber" />
                    
                    <FormLabel>Dates due: </FormLabel>
                    <Input placeholder="Select Date and Time" size="md" type="date" name='dateDue' />
                    
                    <FormLabel>Company: </FormLabel>
                    <Input placeholder='Company name' name="company" />
                    
                    <FormLabel>Created at:</FormLabel>
                    <Input placeholder="Select Date and Time" size="md" type="date" name='createdAt' />
                </div>
                <button type="button">Save</button> 
            </FormControl>
            
        
    )
}

export default FormInvoice;