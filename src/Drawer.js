import {
    Drawer,
    DrawerBody,
    DrawerFooter,
    DrawerHeader,
    DrawerOverlay,
    DrawerContent,
    DrawerCloseButton,
  } from '@chakra-ui/react';
  import Dashboard from './assets/images/Dashboard.svg';
  import Invoices from './assets/images/Invoices.svg';
  import Companies from './assets/images/Companies.svg';
  import Contacts from './assets/images/Contacts.svg';


  function Drawer() {
    const { isOpen, onOpen, onClose } = useDisclosure()
    const btnRef = React.useRef()
  
    return (
      <>
        <Button ref={btnRef} colorScheme='teal' onClick={onOpen}>
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
            <DrawerHeader>
              <img src='' alt=''>
              <h3>Name Henry George</h3>
            
            </DrawerHeader>
  
            <DrawerBody>
            <div className="drawer__link">
                    <div>
                    <img src={Dashboard} alt="Map location icon" />
                    <a href="#">Dashboard</a>
                    </div>

                    <div>
                    <img src={Invoices} alt="Map location icon" />
                    <a href="#">Invoices</a>
                    </div>

                   <div>
                    <img src={Companies} alt="Map location icon" />
                    <a href="#">Companies</a>
                    </div>

                    <div>
                    <img src={Contacts} alt="Map location icon" />
                    <a href="#">Contacts</a>
                    </div>
                </div>
            </DrawerBody>
  
            
          </DrawerContent>
        </Drawer>
      </>
    )
  }