import React, {useState} from 'react';
import {Row, Modal, Button} from 'react-bootstrap';
import DayPicker from 'react-day-picker';
import 'react-day-picker/lib/style.css';

const CalendarModal = ({show, handleClose, stocks}) => {
  let initialMonth = new Date();
  let stockDates = [];

  // 在庫で出荷した日を表示
  if(typeof stocks !== 'undefined' && stocks.length > 0) {
    stockDates = stocks.filter(stock => stock.stock_status === 1).map(stock => {
      const created = new Date(stock.created_at);
      initialMonth = (created < initialMonth) ? created : initialMonth;
      return created;
    });
  }
  console.log(stockDates);
  console.log(initialMonth);
  return (
    <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton>
          <Modal.Title>出荷カレンダー</Modal.Title>
        </Modal.Header>
        <Modal.Body><Row className="show-grid"><DayPicker numberOfMonths={3} 
          initialMonth={initialMonth}
          selectedDays={stockDates}
        /></Row></Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={handleClose}>
            終了
          </Button>
        </Modal.Footer>
      </Modal>
  );
};

export default CalendarModal;