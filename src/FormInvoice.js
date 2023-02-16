import {
    Select,
    Input,
    FormControl,
    FormLabel
} from '@chakra-ui/react'

    
     
function FormInvoice(){
    return (
        
            <FormControl isRequired action="" methode="POST">
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