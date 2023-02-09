import React, { useState, useEffect } from 'react';

function DisplayContact(props){
    const [data, setData] = useState([]);

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/compagnies/all';
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data);
    
    return (
        <>
            <div className='rectangle_jaune'>
                <h1 className='invoices__h1'>
                    {contacts[props.name]}
                </h1>
            </div>
            <div className="info">
                <p>
                    <b>Name:</b>{data[props.name]} 
                </p>
                <p>
                    <b>TVA:</b>{data[props.tva]}
                </p>
                <p>
                    <b>Country:</b>{data[props.country]}
                </p>
                <p>
                    <b>Type:</b>{data[props.type]}
                </p>
            </div>
        </>
    );
    }
export default DisplayContact;