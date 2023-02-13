import React, { useState, useEffect } from 'react';

function ContactPeople(props){
    const [data, setData] = useState([]);

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display;
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
                            {elem.id}
                        </h3>
                     </div>
                 )) : null}
            </div>
            <hr />
        </>
    )
}

export default ContactPeople;