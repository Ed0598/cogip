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
  import Boy from './assets/images/Boy.svg';


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
          className='drawer__body'
        >
          <DrawerOverlay />
          <DrawerContent className='drawer__content'>
            <DrawerHeader className='drawer__header'>
              <DrawerCloseButton className='drawer__close__button'/>
              <img src={Boy} alt='photo de la personne enregistrée' />
              <h3 className='drawer__title'>Henry George</h3>
              <hr/>
            </DrawerHeader>
            
            <DrawerBody>
            <div className="drawer__link">
                    <div className='link'>
                    <img src={Dashboard} alt="Map location icon" />
                    <Link to="Dashboard">Dashboard</Link>
                    </div>

                    <div className='link'>
                    <img src={Invoices} alt="Map location icon" />
                    <Link to="/NewInvoice">Invoices</Link>
                    </div>

                    <div className='link'>
                    <img src={Companies} alt="Map location icon" />
                    <Link to="/NewCompany">Companies</Link>
                    </div>

                    <div className='link'>
                    <img src={Contacts} alt="Map location icon" />
                    <Link to="/NewContact">Contacts</Link>
                    </div>

                </div>
               

                <div className='drawer__footer'>
                  <hr/>
                  <img src={Boy} alt='photo de la personne enregistrée' />
                  <Link to="/Dashboard" id="Sign_out" className='signout'>Log Out</Link>                  </div>  
            </DrawerBody>
  
            
          </DrawerContent>
        </Drawer>
      </>
    )
  }
   export default MenuDrawer;