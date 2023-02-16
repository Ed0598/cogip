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

    
     
function FormCompany(props) {
    const [data, setData] = useState([]);
    let { id } = useParams();

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.compagnies;
        fetch(url, { method: 'POST' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data)
    return (
        
            <FormControl isRequired>
                <div className='form_label'>
                    <FormLabel>Name: </FormLabel>
                    <Input placeholder='Company name' name='companyName' />
                    
                    <FormLabel>TVA: </FormLabel>
                    <Input placeholder='TVA' name='TVA' />
                    
                    <FormLabel>Country: </FormLabel>
                    <Input placeholder='Country' name="country" />
                    
                    <FormLabel>Type: </FormLabel>
                    <Input placeholder='Type' name="type" />
                    
                    <FormLabel>Created at:</FormLabel>
                    <Input placeholder="Select Date and Time" size="md" type="date" name='createdAt' />
                </div>
                <button type="button">Save</button> 
            </FormControl>
            
        
    )
}

export default FormCompany;