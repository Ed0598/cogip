import {
    Select,
    Input,
    FormControl,
    FormLabel,
} from '@chakra-ui/react'

    
     
function FormCompany() {
    return (
        
            <FormControl isRequired action="" methode="POST">
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