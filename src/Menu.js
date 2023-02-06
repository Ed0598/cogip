import {
  Menu,
  MenuButton,
  MenuList,
  MenuItem,
  IconButton
} from '@chakra-ui/react';
import {
HamburgerIcon
} from '@chakra-ui/icons';

function Menuburg(){
    return (
    <Menu>
      <MenuButton
        as={IconButton}
        aria-label='Options'
        icon={<HamburgerIcon />}
        variant='outline'
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
  )
}

export default Menuburg;