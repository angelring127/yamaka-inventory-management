import React, {useState} from 'react';
import {Form,Row, Col, Modal, Button, InputGroup, Container} from 'react-bootstrap';
import DatePicker from 'react-datepicker';
import "react-datepicker/dist/react-datepicker.css";
const ShipmentListView = ({}) => {
  const [startDate, setStartDate] = useState(new Date());
  return (
    <Container>
      <Row>
      <DatePicker
        selected={startDate}
        onChange={date => setStartDate(date)}
        dateFormat="yyyy年MM月"
        locale="ja-jp"
        showMonthYearPicker
      />
      </Row>
      <Row>

      </Row>
    </Container>
  );
};

export default ShipmentListView;