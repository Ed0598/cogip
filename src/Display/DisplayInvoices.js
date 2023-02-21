import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

function DisplayInvoices(props){
    const [data, setData] = useState([]);
    let { id } = useParams();


    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + id;
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data);
    return (
        <>
            <div className='rectangle_jaune'>
                {data.map((elem) => (
                    <h1 className='invoices__h1'>{elem.ref}</h1>
                ))}
            </div>
            <div className="info">
                {data.map((elem) => (
                    <p><b>Invoice number: </b>{elem.ref}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Dates due: </b>{elem.update_at}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Company: </b>{elem.name}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Created at: </b>{elem.created_at}</p>
                ))}
            </div>
        </>
    );
    }
export default DisplayInvoices;