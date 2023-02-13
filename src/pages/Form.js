import {
    Button,
    Select,
    Input,
    FormControl,
    FormLabel,
    FormErrorMessage,
    FormHelperText,
} from '@chakra-ui/react'


function FormFunction() {
    return (
        
            <FormControl isRequired>
                <div className='form_label'>
                    <FormLabel>Reference</FormLabel>
                    <Input placeholder='Reference' />
                    <FormLabel>Price</FormLabel>
                    <Input placeholder='Price' />
                    <FormLabel>Company Name</FormLabel>
                    <Input placeholder='Company Name' />
                    <FormLabel>Country</FormLabel>
                    <Select placeholder='Select country'>
                        <option>Belgium</option>
                        <option>France</option>
                        <option>Netherlands</option>
                        <option>Luxemburg</option>
                        <option>Germany</option>
                        <option>Spain</option>
                    </Select>
                </div>
                <button type="button">Save</button> 
            </FormControl>
            
        
    )
}

export default FormFunction;