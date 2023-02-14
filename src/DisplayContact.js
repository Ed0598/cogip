import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

function DisplayContact(props){
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
                    <h1 className='invoices__h1'>{elem.name}</h1>
                ))}
            </div>
            <div className="info">
                {data.map((elem) => (
                    <p><b>Name: </b>{elem.name}</p>
                ))}
                 {data.map((elem) => (
                    <p><b>Phone: </b>{elem.phone}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Mail: </b>{elem.email}</p>
                ))}
                {data.map((elem) => (
                    <p><b>Company: </b>{elem.name_compagnie}</p>
                ))}
            </div>
        </>
    );
    }
export default DisplayContact;