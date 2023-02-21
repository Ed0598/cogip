import React from 'react'
import MenuDrawer from './Drawer';
import BreadcrumbNav from '../pages/Breadcrumb';
import IlluDashboard from '../assets/images/Illu_dashboard.svg';


function DashboardHeader() {
    return (
        <div className='dashboard'>
            <h2>Dashboard</h2>
            <BreadcrumbNav />
            <div className='menu__drawer'>
                <MenuDrawer />
            </div>

            <div className='rectangle_mauve'>
                <div className='texte'>
                    <h3>Welcome back <br/> Henry !</h3>
                    <p>You can here add an invoice, a company and some contacts.</p>
                </div>
                <img src={IlluDashboard} className="illuDashboard"></img>
                
            </div>
        </div>
    )
}

export default DashboardHeader;