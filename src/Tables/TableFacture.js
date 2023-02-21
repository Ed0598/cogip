import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

function TableFacture(props) {
    const [data, setData] = useState([]);
    let { id } = useParams();

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display + "/" + id;
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data)
    return (
        <>
            <h2>
                Last Invoices
            </h2>
            <table>
                <tbody>
                <tr>
                    <th>
                        {props.th1}
                    </th>
                    <th>
                        {props.th2}
                    </th>
                    <th>
                        {props.th3}
                    </th>
                    <th>
                        {props.th4}
                    </th>
                    <th>
                        {props.th5}
                    </th>
                </tr>
                    {Array.isArray(data) ? data.map((elem,i) => (
                         <tr key={elem[props.id]} style={i% 2 === 1 ? { backgroundColor: '#F5F5F5' } : {}}>
                            <td>{elem[props.td1]}</td>
                            <td>{elem[props.td2]}</td>
                            <td>{elem[props.td3]}</td>
                            <td>{elem[props.td4]}</td>
                            <td>{elem[props.td5]}</td>
                        </tr>
                    )) : null}
                </tbody>
            </table>
        </>
    );
}

export default TableFacture;