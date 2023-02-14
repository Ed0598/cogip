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
import Table from '../Table';


function Dashboard() {
    return (
        <div className='dashboard'>
            <h2>Dashboard</h2>
            <BreadcrumbNav />
            <div className='menu__drawer'>
                <MenuDrawer />
            </div>

            <div className='rectangle_mauve'>
                <img src={IlluDashboard} class="illuDashboard"></img>
                <h3>Welcome back ### !</h3>
                <p>You can here add an invoice, a company and some contacts.</p>
            </div>

            <div className='table_cards'>
                <div className='statistics'>
                    <h4>Statistics</h4>
                    <div className='circles'>
                        <div className='blue_circle'>
                            <p><br />254<br />Invoices</p>
                        </div>
                        <div className='purple_circle'>
                            <p><br />232<br />Contacts</p>
                        </div>
                        <div className='pink_circle'>
                            <p><br />132<br />Companies</p>
                        </div>
                    </div>
                </div>

                <div className='dashboard_table'>
                    <h4>Last invoices</h4>
                    <hr />
                    <div className='over'>
                        <Table table='factures' display="five"
                            id="id" td1="ref" td2="update_at" td3="name"
                            th1="Invoice number" th2="Dates due" th3="Company" />
                    </div>
                </div>

                <div className='dashboard_table'>
                    <h4>Last contacts</h4>
                    <hr />
                    <div className='over'>
                        <Table table="contacts" display="five"
                            id="id" td1="name" td2="phone" td3="email"
                            th1="Name" th2="Phone" th3="Mail" />
                    </div>
                </div>

                <div className='dashboard_table'>
                    <h4>Last companies</h4>
                    <hr />
                    <div className='over'>
                        <Table table="compagnies" display="five"
                            id="id" td1="name" td2="tva" td3="country"
                            th1="Name" th2="TVA" th3="Country" />
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Dashboard;