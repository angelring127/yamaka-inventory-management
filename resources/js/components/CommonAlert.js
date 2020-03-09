import React, { useState, useEffect } from 'react';
import { Alert } from 'react-bootstrap';
import { useSelector } from 'react-redux';

const CommonAlert = ({ handleCloseAlert }) => {
  const alertInfo = useSelector(state => state.alert, []);
  const constText = useSelector(state => state.constText, []);

  const alert = (<Alert style={{ marginTop: "50px" }} variant={alertInfo.status} onClose={handleCloseAlert} dismissible>
    <Alert.Heading>{(alertInfo.status === 'danger') ? constText.error : constText.success}</Alert.Heading>
    <p>
      {alertInfo.message}
    </p>
  </Alert>);
  return (alertInfo.isAlert) ? alert : null;
};

export default CommonAlert;

