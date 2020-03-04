import React from 'react';
import { useSelector } from 'react-redux';

import { Table, Container, Row, Col, Spinner, Modal, Button } from 'react-bootstrap';

import '../app.css';



const setItems = (items, constText) => {
  console.log(items);
  const empty = (<tr><td colSpan="3">{constText.emptyErrorMsg}</td></tr>);
  if (typeof items !== 'undefined' && items !== null) {
    return items.length === 0 ? empty :
      items.map(item => (
        <tr key={item.id}>
          <td>
            {item.id}
          </td>
          <td>
            {item.created_at}
          </td>
          <td>
            <Button variant="danger">{constText.labelDelete}</Button>
          </td>
        </tr>
      ));
  }
  return empty;
}
/**
 * 在庫入力記録リスト表示
 */
const RecordTable = () => {
  const constText = useSelector(state => state.constText, []);
  const recordInfo = useSelector(state => state.record, []);

  const items = setItems(recordInfo.recordList, constText);
  return (<Container style={{ marginTop: "100px" }}>
    <Row>
      <h1>{constText.recordTableTitle}</h1>
    </Row>
    <Row>
      <Table responsive striped bordered hover className="record-table">
        <thead>
          <tr>
            <th>{constText.labelRecordNumber}</th>
            <th>{constText.labelAtCreated}</th>
            <th>{constText.labelEdit}</th>
          </tr>
        </thead>
        <tbody>
          {items}
        </tbody>
      </Table>
    </Row>
  </Container>);
};

export default RecordTable;
