import React, {useState} from 'react';
import {Row, Modal, Button} from 'react-bootstrap';
import DayPicker from 'react-day-picker';
import 'react-day-picker/lib/style.css';

const CalendarModal = ({show, handleClose, stocks}) => {
  console.log(stocks);
  return (
    <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton>
          <Modal.Title>Modal heading</Modal.Title>
        </Modal.Header>
        <Modal.Body><Row className="show-grid"><DayPicker numberOfMonths={3} 
          initialMonth={new Date(2017, 3)}
          selectedDays={[
            new Date(2017, 3, 12),
            new Date(2017, 3, 2),
            {
              after: new Date(2017, 3, 20),
              before: new Date(2017, 3, 25),
            },
          ]}
        /></Row></Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={handleClose}>
            Close
          </Button>
        </Modal.Footer>
      </Modal>
  );

};

export default CalendarModal;