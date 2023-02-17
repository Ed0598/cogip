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
import FormContact from '../FormContact';
import DashboardHeader from '../DashboardHeader';

function NewContact() {
    return(
        <>
            <DashboardHeader />
            <div className='body_dashboard_invoice'>
                <div className='new_invoice'>
                    <div className='div_form'>
                        <FormContact />
                    </div>
                </div>
            </div>

        </>
    )
}

export default NewContact;