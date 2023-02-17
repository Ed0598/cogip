import {
    Input,
    FormControl,
    FormLabel,
} from '@chakra-ui/react'
import React, { useState, useEffect } from 'react';


function FormContact(props) {

    const [data, setData] = useState([]);
    const [name, setName] = useState("");
    const [phone, setPhone] = useState("");
    const [email, setEmail] = useState("");
    const [companyId, setCompanyId] = useState("");
    const [createdAt, setCreatedAt] = useState("");

    const handleSubmit = (event) => {
        event.preventDefault();

        const formData = {
            name: name,
            email: email,
            phone: phone,
            created_at: createdAt,
          };
          fetch("https://api.hugoorickx.tech/contacts", {
            method: "POST",
            body: JSON.stringify(formData),
            headers: {
              "Content-Type": "application/json",
            },
          })
            .then((response) => response.json())
            .then((responseData) => {
              setData(responseData.data || []);
              setName("");
              setPhone("");
              setEmail("");
              setCompanyId("");
              setCreatedAt("");
            });
        };
        useEffect(() => {
            let url = "https://api.hugoorickx.tech/companies/all";
            fetch(url, { method: 'GET' })
              .then((response) => response.json())
              .then((responseData) => setData(responseData.data || [] ));
          }, []);
    return (
        <FormControl isRequired>
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
            <button type="button">Save</button> 
        </FormControl>
    )
}

export default FormContact;