/**
 * ShipmentListView.js
 * CalendarModalで出荷リスト表示画面
 */
import React, {useState, useEffect} from 'react';
import {Form,Row, Col, Button, Table, InputGroup, Container} from 'react-bootstrap';
import DatePicker, { registerLocale, setDefaultLocale } from 'react-datepicker';
import { useSelector, useDispatch } from 'react-redux';
import * as fetchStock from '../fetch/fetchStockTable';
import "react-datepicker/dist/react-datepicker.css";
import ja from 'date-fns/locale/ja';

registerLocale('ja', ja)

/**
 * モーダル画面で出荷リストを選択された月によって表示する機能
 */
const ShipmentListView = ({item}) => {
  const dispatch = useDispatch();
  // 選択した年月から出荷リスト取得
  const setYearMonth = (yearMonth) => {
    dispatch(fetchStock.getShipmentList(item.id, yearMonth));
  };

  //　文言object
  const constText = useSelector(state => state.constText, []);
  const selectedShipmentList = useSelector(state => state.stockTable.selectedShipmentList, []);
  const shipmentTableList = selectedShipmentList !== null ? 
    selectedShipmentList.map(shipment => <tr key={shipment.id}><td>{shipment.created_at}</td><td>{shipment.stock_count}</td></tr>) : [];
  const [startDate, setStartDate] = useState(new Date());
  useEffect(() => {
    // 年月が初期化、
    const strDate = startDate.getFullYear() + '-' + ('00' + (startDate.getMonth() + 1)).slice(-2);
    setYearMonth(strDate);
  }, [startDate]);

  const ref = React.createRef();
  // カレンダー選択ボタン
  const CustomCalendarButton = React.forwardRef((props, ref) => (
    <Button ref={ref} variant="light" onClick={props.onClick}>{props.value}</Button>
  ));

  const emptyErrorMsg = <tr><td colSpan="2">{constText.emptyErrorMsg}</td></tr>;
  const shipmentList = (
    <Table responsive striped bordered hover>
        <thead>
          <tr>
          <th>{constText.yearMonth}</th>
          <th>{constText.shipment}</th>
          </tr>
        </thead>
        <tbody>
          {shipmentTableList.length > 0 ? shipmentTableList : emptyErrorMsg}
        </tbody>
    </Table>
  );
  return (
    <Container>
      <Row>
        <InputGroup size="sm" className="mb-3">
          <DatePicker
            selected={startDate}
            onChange={date => setStartDate(date)}
            dateFormat={constText.dateformat}
            locale="ja"
            showMonthYearPicker
            customInput={<CustomCalendarButton ref={ref} />}
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