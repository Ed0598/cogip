import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

function ContactPeople(props){
    const [data, setData] = useState([]);

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display + "1";
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data);
    return(
        <>
            <h2>
                Contact people
            </h2>
            <div className='contacts'>
                {Array.isArray(data) ? data.map((elem) => (
                    <div className='contact'>
                        <h3>
                            Test
                            {elem.name}
                        </h3>
                     </div>
                 )) : null}
            </div>
            <hr />
        </>
    )
}

export default ContactPeople;

//GET contact/company/id