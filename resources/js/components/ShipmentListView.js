import React, {useState} from 'react';
import {Form,Row, Col, Modal, Table, InputGroup, Container} from 'react-bootstrap';
import DatePicker, { registerLocale, setDefaultLocale } from 'react-datepicker';
import { useSelector, useDispatch } from 'react-redux';
import * as fetchStock from '../fetch/fetchStockTable';
import "react-datepicker/dist/react-datepicker.css";
import ja from 'date-fns/locale/ja';

registerLocale('ja', ja)

const ShipmentListView = ({item}) => {
  const dispatch = useDispatch();
  // テーブル変更
  const setYearMonth = (yearMonth) => {
    dispatch(fetchStock.getShipmentList(item.id, yearMonth));
  }; 

  const constText = useSelector(state => state.constText, []);
  const selectedShipmentList = useSelector(state => state.stockTable.selectedShipmentList, []);
  const shipmentTableList = selectedShipmentList !== null ? 
    selectedShipmentList.map(shipment => <tr><td>{shipment.created_at}</td><td>{shipment.stock_count}</td></tr>) : null;
  const [startDate, setStartDate] = useState(new Date());
  const emptyErrorMsg = <tr><td colSpan="2">{constText.emptyErrorMsg}</td></tr>;

  const handleDatePicker = (date) => {
    const strDate = date.getFullYear() + '-' + ('00' + (date.getMonth() + 1)).slice(-2);
    setYearMonth(strDate);
    setStartDate(date);
  };
  const shipmentList = (
    <Table responsive striped bordered hover>
        <thead>
          <tr>
          <th>{constText.yearMonth}</th>
          <th>{constText.shipment}</th>
          </tr>
        </thead>
        <tbody>
          {shipmentTableList !== null ? shipmentTableList : emptyErrorMsg}
        </tbody>
    </Table>
  );
  return (
    <Container>
      <Row>
        <InputGroup size="sm" className="mb-3">
          <InputGroup.Prepend>
            <InputGroup.Text id="inputGroup-sizing-sm">Default</InputGroup.Text>
          </InputGroup.Prepend>
          <DatePicker
            selected={startDate}
            onChange={date => handleDatePicker(date)}
            dateFormat="yyyy年MM月"
            locale="ja"
            showMonthYearPicker
          />
        </InputGroup>
      </Row>
      <Row>
      { shipmentList }
      </Row>
    </Container>
  );
};

export default ShipmentListView;