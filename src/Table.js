
import React, { useState, useEffect } from 'react';

function Table(props) {
    const [data, setData] = useState([]);

    useEffect(() => {
        let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display  ;
        fetch(url, { method: 'GET' })
            .then((response) => response.json())
            .then((responseData) => setData(responseData.message || []));
    }, []);
    console.log(data)
    return (
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
    );
}

export default Table;