import React from 'react'
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbSeparator,
  } from '@chakra-ui/react'
import MenuDrawer from '../Dashboard/Drawer';
import BreadcrumbNav from './Breadcrumb';
import IlluDashboard from '../assets/images/Illu_dashboard.svg';
import FormInvoice from '../Form/FormInvoice';
import DashboardHeader from '../Dashboard/DashboardHeader';


function NewInvoice() {
    return(
        <>
            <DashboardHeader />
            <div className='body_dashboard_invoice'>
                <div className='new_invoice'>

                    <div className='div_form'>
                        <FormInvoice />
                    </div>
                </div>
            </div>
        </>
    )
}

export default NewInvoice;