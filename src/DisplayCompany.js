import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

function DisplayCompany(props){
    const [data, setData] = useState([]);
    let { id } = useParams();


    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + id;
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    return (
        <>
            <div className='rectangle_jaune'>
                {data.map((elem) => (
                    <h1 className='invoices__h1'>{elem.name}</h1>
                ))}
            </div>
            <div className="info">
                {data.map((elem) => (
                    <p><b>Name: </b>{elem.name}</p>
                ))}
                {data.map((elem) => (
                    <p><b>TVA: </b>{elem.tva}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Country: </b>{elem.country}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Type: </b>{elem.type}</p>
                ))}
            </div>
        </>
    );
    }
export default DisplayCompany;