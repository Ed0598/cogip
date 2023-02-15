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
            <div className='new_invoice'>
            <h2>New Company</h2>
            <BreadcrumbNav />
            <MenuDrawer />

            <div className='rectangle_mauve'>
                <img src={IlluDashboard} class="illuDashboard" alt="#"></img>
                <h3>Welcome back ### !</h3>
                <p>You can here add a company.</p>

            </div>

            <div className='div_form'>
               <FormCompany />
            </div>
        </div>
        </div>
    )
}

export default NewCompany;