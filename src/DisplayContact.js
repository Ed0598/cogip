import React, { useState, useEffect } from 'react';

function DisplayContact(props){
    const [data, setData] = useState([]);

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display;
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data);
    
    return (
        <>
            <div className='rectangle_jaune'>
                {data.map((elem) => (
                    <h1 className='invoices__h1'>{elem.name}</h1>
                ))}
            </div>
            <div className="info">
                {data.map((elem) => (
                    <p><b>Name:</b>{elem.name}</p>
                ))}
                {data.map((elem) => (
                    <p><b>TVA:</b>{elem.tva}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Country:</b>{elem.country}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Type:</b>{elem.type}</p>
                ))}
            </div>
            <br />
        </>
    );
    }
export default DisplayContact;