import {
    Button,
    useDisclosure,
    Drawer,
    DrawerBody,
    DrawerFooter,
    DrawerHeader,
    DrawerOverlay,
    DrawerContent,
    DrawerCloseButton,
  } from '@chakra-ui/react';

  import React from 'react';
  import {Link} from 'react-router-dom';

  import Dashboard from './assets/images/Dashboard.svg';
  import Invoices from './assets/images/Invoices.svg';
  import Companies from './assets/images/Companies.svg';
  import Contacts from './assets/images/Contact.svg';


  function MenuDrawer() {
    const { isOpen, onOpen, onClose } = useDisclosure();
    const btnRef = React.useRef();
  
    return (
      <>
        <Button className='drawer__button' ref={btnRef} colorScheme='teal' onClick={onOpen}>
          Open
        </Button>
        <Drawer
          isOpen={isOpen}
          placement='left'
          onClose={onClose}
          finalFocusRef={btnRef}
        >
          <DrawerOverlay />
          <DrawerContent>
            <DrawerCloseButton />
            <DrawerHeader className='drawer__header'>
              <img src='' alt='' />
              <h3 className='drawer__title'>Name Henry George</h3>
            
            </DrawerHeader>
  
            <DrawerBody>
            <div className="drawer__link">
                    <div>
                    <img src={Dashboard} alt="Map location icon" />
                    <Link to="/Dashboard">Dashboard</Link>

                    </div>

                    <div>
                    <img src={Invoices} alt="Map location icon" />
                    <Link to="/Invoices">Invoices</Link>

                    </div>

                   <div>
                    <img src={Companies} alt="Map location icon" />
                    <Link to="/Companies">Companies</Link>
                    </div>

                    <div>
                    <img src={Contacts} alt="Map location icon" />
                    <Link to="/Contacts">Contacts</Link>
                    </div>
                </div>
            </DrawerBody>
  
            
          </DrawerContent>
        </Drawer>
      </>
    )
  }
   export default MenuDrawer;