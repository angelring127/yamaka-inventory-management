import React, { useState, useEffect } from 'react';
import {　Modal, Button } from 'react-bootstrap';

const CommonModal = ({ show, handleClose, context, handler }) => {

  return (
    <Modal show={show} onHide={handleClose}>
      <Modal.Header closeButton>
        <Modal.Title>{context.title}</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {context.messgae}
      </Modal.Body>
      <Modal.Footer>
        <Button variant="success" onClick={handler}>
          {context.function}
        </Button>
        <Button variant="secondary" onClick={handleClose}>
          {context.exit}
        </Button>
      </Modal.Footer>
    </Modal>
  );
};

export default CommonModal;