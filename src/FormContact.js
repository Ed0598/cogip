import {
    Input,
    FormControl,
    FormLabel,
} from '@chakra-ui/react'
import React, { useState } from 'react';

function FormContact(props) {

    const [data, setData] = useState([]);
    const [name, setName] = useState("");
    const [phone, setPhone] = useState("");
    const [email, setEmail] = useState("");
    const [companyId, setCompanyId] = useState("");
    const [createdAt, setCreatedAt] = useState("");

    const handleSubmit = (event) => {
        event.preventDefault();

        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('created_at', createdAt);

        fetch('https://api.hugoorickx.tech/contacts', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(responseData => {
            setData(responseData.data || []);
            setName("");
            setPhone("");
            setEmail("");
            setCompanyId("");
            setCreatedAt("");
        });
    };

    return (
        <FormControl onSubmit={handleSubmit}>
            <div className='form_label'>

                <FormLabel>Name</FormLabel>
                <Input placeholder='Name' 
                onChange={(event) => setName(event.target.value)}/>

                <FormLabel>Phone</FormLabel>
                <Input placeholder='Phone' 
                onChange={(event) => setPhone(event.target.value)}/>

                <FormLabel>Mail</FormLabel>
                <Input placeholder="Mail" size="md" type="email" 
                onChange={(event) => setEmail(event.target.value)}/>

                <FormLabel>Company</FormLabel>
                <input placeholder='Company'
                onChange={(event) => setCompanyId(event.target.value)}/>

                <FormLabel>Created at</FormLabel>
                <Input placeholder="Select Date and Time" size="md" type="date" 
                onChange={(event) => setCreatedAt(event.target.value)}/>

            </div>
            <button type="submit">Save</button> 
        </FormControl>
    )
}

export default FormContact;
