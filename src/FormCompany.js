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