/**
 * IsPending.js
 * 待機画面表示
 */
import React, { useState, useEffect } from 'react';
import { Table, Container, Row, Col, Spinner, Modal, Button } from 'react-bootstrap';
import 'react-day-picker/lib/style.css';
import '../app.css';
import { css } from "@emotion/core";
// First way to import
import { BounceLoader } from "react-spinners";


const override = css`
  display: block;
  margin: 0 auto;
  border-color: red;
`;

/**
 * 待機中画面
 */
const IsPending = (
  <Container style={{ marginTop: "500px" }} >
    <div className="sweet-loading">
      <BounceLoader
        css={override}
        size={150}
        //size={"150px"} this also works
        loading={true}
      />
    </div>
  </Container>
);


export default IsPending;

