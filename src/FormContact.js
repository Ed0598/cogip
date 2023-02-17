import {
    Input,
    FormControl,
    FormLabel
} from '@chakra-ui/react';


function FormContact() {
    return (
        
            <FormControl isRequired action="../forms/formContacts.php" method="POST">
                <div className='form_label'>

                    <FormLabel>Name</FormLabel>
                    <Input placeholder='Name' name='name' />

                    <FormLabel>Phone</FormLabel>
                    <Input placeholder='Phone' name='phone'/>

                    <FormLabel>Mail</FormLabel>
                    <Input placeholder="Mail" size="md" type="email" name='mail'/>

                    <FormLabel>Company</FormLabel>
                    <Input placeholder='Name of the company' name='company'/>

                    <FormLabel>Created at</FormLabel>
                    <Input placeholder="Select Date and Time" size="md" type="date" name='createAt' />

                </div>
                <button type="button">Save</button> 
            </FormControl>
    )
}

export default FormContact;