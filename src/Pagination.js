import React, { useEffect, useState } from 'react';
import ReactPaginate from 'react-paginate';
import { Link } from 'react-router-dom';
import { Input } from '@chakra-ui/react';

function TablePagination(props) {
  const [data, setData] = useState([]);
  const [itemOffset, setItemOffset] = useState(0);
  const [searchTerm, setSearchTerm] = useState('');
  const itemsPerPage = props.itemsPerPage;

  useEffect(() => {
      let url = 'https://api.hugoorickx.tech/' + props.table + '/' + props.display;
      fetch(url, { method: 'GET' })
          .then((response) => response.json())
          .then((responseData) => setData(responseData.message || []));
  }, []);

  const endOffset = itemOffset + itemsPerPage;
  const currentData = data
    .filter((elem) =>
      elem[props.td1].toLowerCase().includes(searchTerm.toLowerCase())
    )
    .slice(itemOffset, endOffset);
  const pageCount = Math.ceil(currentData.length / itemsPerPage);

  const handlePageClick = (event) => {
      const newOffset = (event.selected * itemsPerPage) % currentData.length;
      setItemOffset(newOffset);
  };

  const handleSearch = (event) => {
    setSearchTerm(event.target.value);
    setItemOffset(0);
  };

  return (
      <>
        <Input
          placeholder='Search'
          size='sm'
          className='search'
          value={searchTerm}
          onChange={handleSearch}
        />
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
                  {Array.isArray(currentData) ? currentData.map((elem,i) => (
                      <tr key={elem[props.id]} style={i% 2 === 1 ? { backgroundColor: '#F5F5F5' } : {}}>
                          <td><Link to={`/${props.lien}/${elem[props.id]}`}>{elem[props.td1]}</Link></td>
                          <td>{elem[props.td2]}</td>
                          <td>{elem[props.td3]}</td>
                          <td>{elem[props.td4]}</td>
                          <td>{elem[props.td5]}</td>
                      </tr>
                  )) : null}
              </tbody>
          </table>
          <ReactPaginate
              breakLabel="..."
              nextLabel=">"
              onPageChange={handlePageClick}
              pageRangeDisplayed={2}
              pageCount={pageCount}
              previousLabel="<"
              renderOnZeroPageCount={null}
          />
      </>
  );
}

export default TablePagination;
