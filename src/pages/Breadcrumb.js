import {
    Link,
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbSeparator,
  } from '@chakra-ui/react'


// import { Link } from "@reach/router"

function BreadcrumbNav (){
    return (
<Breadcrumb class='breadcrumb_div'>
  <BreadcrumbItem className='breadCrumbItem'>
    <BreadcrumbLink as={Link} to='/Dashboard'>
      Dashboard
    </BreadcrumbLink>
  </BreadcrumbItem>
  <BreadcrumbItem className='breadCrumbItem'>
    <BreadcrumbLink as={Link} to='/Newinvoice'>
     New Invoice
    </BreadcrumbLink>
  </BreadcrumbItem>
</Breadcrumb>
)
}

export default BreadcrumbNav;