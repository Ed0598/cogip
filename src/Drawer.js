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
          <DrawerContent>
            <DrawerCloseButton className='drawer__close__button'/>
            <DrawerHeader className='drawer__header'>
              <img src={Boy} alt='photo de la personne enregistrée' />
              <h3 className='drawer__title'>Henry George</h3>
            
            </DrawerHeader>
            <hr/>
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
                <hr/>

                <div className='drawer__footer'>
                  <hr/>
                  <img src={Boy} alt='photo de la personne enregistrée' />
                  <Link to="/Dashboard" id="Sign_out" className='signout'>Sign Out</Link>                  </div>  
            </DrawerBody>
  
            
          </DrawerContent>
        </Drawer>
      </>
    )
  }
   export default MenuDrawer;