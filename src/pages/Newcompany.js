import React from 'react'
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbSeparator,
  } from '@chakra-ui/react'
import MenuDrawer from '../Drawer';
import BreadcrumbNav from './Breadcrumb';
import IlluDashboard from '../assets/images/Illu_dashboard.svg';
import FormCompany from '../FormCompany';

function NewCompany() {
    return(
        <div className='body_dashboard_invoice'>
            <div className='div_form'>
               <FormCompany />
            </div>
        </div>
    )
}

export default NewCompany;