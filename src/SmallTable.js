
function SmallTable(props) {
    let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display;
    const table= document.getElementsByName('table')
    fetch(url,{method:"GET"}) 
        .then((response) => { return response.json(); })
        .then((data) => { 
            console.log(data);
            let list=data.message
            for(let elem of list){
                console.log(elem.id)


                //reprendre ici
                let tr=document.createElement('tr');
                table.appendChild(tr);

                let td=document.createElement('td');
                td.textContent= elem.id
                tr.appendChild(td);
            }
    })       
}



{/* <table>
            <tr>
                <th>
                    Invoice number
                </th>
                <th>
                    Date due
                </th>
                <th>
                    Company
                </th>
                <th>
                    Create at
                </th>
            </tr>
            <tr>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
            </tr>
            <tr className="grey">
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
            </tr>
            <tr>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
            </tr>
            <tr className="grey">
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
            </tr>
            <tr>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
                <td>
                    Date
                </td>
            </tr>
        </table> */}
export default SmallTable;