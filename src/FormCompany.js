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
                    <Input placeholder='Company name' />
                    <FormLabel>TVA: </FormLabel>
                    <Input placeholder='TVA' />
                    <FormLabel>Country: </FormLabel>
                    <Select placeholder='Select country'>
                        <option>Belgium</option>
                        <option>France</option>
                        <option>Netherlands</option>
                        <option>Germany</option>
                        <option>Spain</option>
                        <option>Italy</option>
                    </Select>
                    <FormLabel>Type:</FormLabel>
                    <Input placeholder='Type' />
                    <FormLabel>Created at:</FormLabel>
                    <Input placeholder='Date of creation' />
                </div>
                <button type="button">Save</button> 
            </FormControl>
            
        
    )
}

export default FormCompany;