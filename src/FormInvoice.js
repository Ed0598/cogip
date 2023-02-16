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
                    <Input placeholder='Invoice Number' />
                    <FormLabel>Dates due: </FormLabel>
                    <Input placeholder='Dates due' />
                    <FormLabel>Company: </FormLabel>
                    <Select placeholder='Select company'>
                        <option>Lego</option>
                        <option>Apple</option>
                        <option>Logitech</option>
                        <option>Ikea</option>
                        <option>Facebook</option>
                        <option>Macdou</option>
                    </Select>
                    <FormLabel>Created at:</FormLabel>
                    <Input placeholder='Date of creation' />
                </div>
                <button type="button">Save</button> 
            </FormControl>
    )
}

export default FormInvoice;