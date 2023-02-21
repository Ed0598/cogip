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
import {Link} from 'react-router-dom';

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
        <Link to="/">Home</Link>
        </MenuItem>
        <MenuItem>
        <Link to="/Invoices">Invoices</Link>
        </MenuItem>
        <MenuItem>
        <Link to="/Companies">Companies</Link>
        </MenuItem>
        <MenuItem>
        <Link to="/Contacts">Contacts</Link>
        </MenuItem>
      </MenuList>
    </Menu>
    </>
  )
}

export default Menuburg;