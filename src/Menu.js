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
          New Tab
        </MenuItem>
        <MenuItem>
          New Window
        </MenuItem>
        <MenuItem>
          Open Closed Tab
        </MenuItem>
        <MenuItem>
          Open File...
        </MenuItem>
      </MenuList>
    </Menu>
  )
}

export default Menuburg;