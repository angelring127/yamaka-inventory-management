/**
 * CalendarModal.js
 * 在庫の状態をカレンダーで表示モダール
 */
import React, {useState, useEffect} from 'react';
import {Row, Modal, Button, Col, Table} from 'react-bootstrap';
import DayPicker from 'react-day-picker';
import { useSelector, useDispatch } from 'react-redux';
import 'react-day-picker/lib/style.css';
import MomentLocaleUtils from 'react-day-picker/moment';
import ShipmentListView from './ShipmentListView';
import CommonModal from './CommonModal';

import 'moment/locale/ja';

const setTable = (selectedItemStocks, constText) => {
  const tableItems = selectedItemStocks.map(stock => {
    return (<tr key={stock.id}>
      <td>{stock.created_at}</td>
      <td>{stock.currentstock_count}</td>
      </tr>);
  });

  return (
    <Table responsive striped bordered hover>
      <thead>
        <tr>
          <th>{constText.yearMonth}</th>
          <th>{constText.inventory}</th>
        </tr>
      </thead>
      <tbody>
        {tableItems}
      </tbody>
    </Table>
  )
}

const CalendarModal = ({show, handleClose, item}) => {
  let initialMonth = new Date();
  let stockDates = [];

  // 文言object
  const constText = useSelector(state => state.constText, []);
  const stockTable = useSelector(state => state.stockTable, []);

  const [showShipmentView, setShipmentView] = useState(false);
  // モーダルテキスト
  const [context, setContext] = useState({exit: constText.exit});
  const handleShipmentView = () => setShipmentView(!showShipmentView);
  useEffect(() => {
    // 新し項目を選択された時初期画面に戻る
    setShipmentView(false);
  }, [item]);

  // modal flag
  const [showComModal, setShowComModal] = useState(false);
  // modalHandling
  const handleComModalClose = () => setShowComModal(false);
  const handleComModalShow = () =>  {setShowComModal(true);};

  const onDayClick = (day, modifiers, e) => {
    if (modifiers.selected) {
      const selectedItemStocks = stockTable.selectedItem.stocks.filter(stock => stock.created_at.includes(day.getFullYear() + '-' + ('00' + (day.getMonth() + 1)).slice(-2) + '-' + ('00' + day.getDate()).slice(-2)));
      handleComModalShow();
      const strDate = day.getFullYear() + '年' + ('00' + (day.getMonth() + 1)).slice(-2) + '月' + ('00' + day.getDate()).slice(-2) + '日';
      context.title = strDate;
      context.message = setTable(selectedItemStocks, constText);
      setContext(context);
    }
  }

  // 在庫で出荷した日を表示
  if (item !== null) {
    if(typeof item.stocks !== 'undefined' && item.stocks.length > 0) {
      stockDates = item.stocks.filter(stock => stock.stock_status === 2).map(stock => {
        const created = new Date(stock.created_at);
        initialMonth = (created < initialMonth) ? created : initialMonth;
        return created;
      });
    }
  }
  

  const dayPicker = <Row className="show-grid">
    <DayPicker numberOfMonths={3} 
      localeUtils={MomentLocaleUtils}
      locale={'ja'}
      initialMonth={initialMonth}
      selectedDays={stockDates}
      onDayClick={onDayClick}
    />
    <CommonModal show={showComModal} handleClose={handleComModalClose} context={context} centered={true}/>
  </Row>;
  const shipmentView = <ShipmentListView item = {item} />;

  const modalTitle = !showShipmentView ? "製造カレンダー" : "出荷リスト";
  const toggleBtnText = showShipmentView ? "製造カレンダー" : "出荷リスト";

  return (
    <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton>
          <Modal.Title>{modalTitle}</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          { showShipmentView ? shipmentView : dayPicker}
        </Modal.Body>
        <Modal.Footer>
          <Button variant="info" onClick={handleShipmentView}>
          {toggleBtnText}
          </Button>
          <Button variant="secondary" onClick={handleClose}>
            終了
          </Button>
        </Modal.Footer>
      </Modal>
  );
};

export default CalendarModal;