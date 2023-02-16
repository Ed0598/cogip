import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import Table from 'git./Table';


function TableCards(props) {
    const [invoices, setInvoices] = useState(0);
    const [contacts, setContacts] = useState(0);
    const [companies, setCompanies] = useState(0);
    let { id } = useParams();

    useEffect(() => {
        fetch('https://api.hugoorickx.tech/factures/all')
            .then(response => response.json())
            .then(data => setInvoices(data.message.length))
            .catch(error => console.error(error));

        fetch('https://api.hugoorickx.tech/contacts/all')
            .then(response => response.json())
            .then(data => setContacts(data.message.length))
            .catch(error => console.error(error));

        fetch('https://api.hugoorickx.tech/compagnies/all')
            .then(response => response.json())
            .then(data => setCompanies(data.message.length))
            .catch(error => console.error(error));
    }, []);

    return (
        <div className='table_cards'>
            <div className='statistics'>
                <h4>Statistics</h4>
                <div className='circles'>
                    <div className='blue_circle'>
                        <p><br />{invoices}<br />Invoices</p>
                    </div>
                    <div className='purple_circle'>
                        <p><br />{contacts}<br />Contacts</p>
                    </div>
                    <div className='pink_circle'>
                        <p><br />{companies}<br />Companies</p>
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
    );
}

export default TableCards;


