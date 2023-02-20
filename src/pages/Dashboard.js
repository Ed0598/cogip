import React from 'react'
import MenuDrawer from '../Dashboard/Drawer';
import BreadcrumbNav from './Breadcrumb';
import IlluDashboard from '../assets/images/Illu_dashboard.svg';
import TableCards from '../Tables/TableCards';
import DashboardHeader from '../Dashboard/DashboardHeader';

function Dashboard() {
    return (
        <>
            <DashboardHeader />

            <TableCards />
        </>
    )
}

export default Dashboard;