import React from 'react'
import MenuDrawer from '../Drawer';
import BreadcrumbNav from './Breadcrumb';
import IlluDashboard from '../assets/images/Illu_dashboard.svg';
import TableCards from '../TableCards';
import DashboardHeader from '../DashboardHeader';

function Dashboard() {
    return (
        <>
            <DashboardHeader />

            <TableCards />
        </>
    )
}

export default Dashboard;