import React, {useState} from 'react';
import {Row, Modal, Button} from 'react-bootstrap';
import DayPicker from 'react-day-picker';
import 'react-day-picker/lib/style.css';

const CalendarModal = ({show, handleClose, stocks}) => {
  let initialMonth = new Date();
  let stockDates = [];

  const [showShipmentView, setShipmentView] = useState(false);
  const handleShipmentView = () => setShipmentView(!showShipmentView);

  // 在庫で出荷した日を表示
  if(typeof stocks !== 'undefined' && stocks.length > 0) {
    stockDates = stocks.filter(stock => stock.stock_status === 2).map(stock => {
      const created = new Date(stock.created_at);
      initialMonth = (created < initialMonth) ? created : initialMonth;
      return created;
    });
  }

  const dayPicker = <DayPicker numberOfMonths={3} 
                      initialMonth={initialMonth}
                      selectedDays={stockDates}
                    />;
  const shipmentView = <div>shipmentView</div>;

  const modalTitle = !showShipmentView ? "製造カレンダー" : "出荷リスト";
  const toggleBtnText = showShipmentView ? "製造カレンダー" : "出荷リスト";

  return (
    <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton>
          <Modal.Title>{modalTitle}</Modal.Title>
        </Modal.Header>
        <Modal.Body><Row className="show-grid">
          { showShipmentView ? shipmentView : dayPicker}
        </Row></Modal.Body>
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