import {
  Menu,
  MenuButton,
  MenuList,
  MenuItem,
  IconButton,
  Box
} from '@chakra-ui/react';
import {
HamburgerIcon
} from '@chakra-ui/icons';

function Menuburg(){
    return (
      <>
    <Box bg='red' />
    <Menu>
      <MenuButton
        as={IconButton}
        aria-label='Options'
        icon={<HamburgerIcon />}
      />
      <MenuList>
        <MenuItem>
          Home
        </MenuItem>
        <MenuItem>
          Invoices
        </MenuItem>
        <MenuItem>
          Companies
        </MenuItem>
        <MenuItem>
          Contacts
        </MenuItem>
      </MenuList>
    </Menu>
    </>
  )
}

export default Menuburg;