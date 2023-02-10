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
import Form from './Form';

function NewInvoice() {
    return(
        <div className='body_dashboard_invoice'>
        <div className='new_invoice'>
            <h2>New Invoice</h2>
            <BreadcrumbNav />
            <MenuDrawer />

            <div className='rectangle_mauve'>
                <img src={IlluDashboard} class="illuDashboard"></img>
                <h3>Welcome back ### !</h3>
                <p>You can here add an invoice, a company and some contacts.</p>

            </div>

            <div className='div_form'>
               <Form />
            </div>
        </div>
        </div>
    )
}

export default NewInvoice;