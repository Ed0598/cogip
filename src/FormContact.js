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


function FormContact(props) {
  const [data, setData] = useState([]);

        useEffect(() => {
            let url = "https://api.hugoorickx.tech/contacts";
            fetch(url, { method: 'POST' })
              .then((response) => response.json())
              .then((responseData) => setData(responseData.data || [] ));
          }, []);
    return (
        
            <FormControl isRequired>
                <div className='form_label'>

                    <FormLabel>Name</FormLabel>
                    <Input placeholder='Name' name='name' />

                    <FormLabel>Phone</FormLabel>
                    <Input placeholder='Phone' name='phone' />

                    <FormLabel>Mail</FormLabel>
                    <Input placeholder="Mail" size="md" type="email" name='mail' />

                    <FormLabel>Company</FormLabel>
                    <Input placeholder='company' name='company' />

                    <FormLabel>Created at</FormLabel>
                    <Input placeholder="Select Date and Time" size="md" type="date" name='createdAt' />

                </div>
                <button type="button">Save</button> 
            </FormControl>
    )
}

export default FormContact;