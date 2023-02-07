

function SmallTable() {
    let compagnies = 'http://localhost:8001/compagnies/all'
    fetch(compagnies,{method:"GET"}) 
        .then((response) => { return response.json(); })
        .then((data) => { console.log("tous les compagnies"); console.log(data) })




        

}

export default SmallTable;


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