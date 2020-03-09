import React, { useState, useEffect } from 'react';
import {　Modal, Button, Row, Table, Col } from 'react-bootstrap';

const CommonModal = ({ show, handleClose, context, handler, centered }) => {
  const handlerBtn = (typeof handler === 'undefined' || handler === null) ? null :
    <Button variant="success" onClick={handler}>{context.function}</Button>;
  return (
    <Modal show={show} onHide={handleClose} centered={centered}>
      <Modal.Header closeButton>
        <Modal.Title>{context.title}</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Row>
          <Col>
          {context.message}
          </Col>
        </Row>
      </Modal.Body>
      <Modal.Footer>
        {handlerBtn}
        <Button variant="secondary" onClick={handleClose}>
          {context.exit}
        </Button>
      </Modal.Footer>
    </Modal>
  );
};

export default CommonModal;