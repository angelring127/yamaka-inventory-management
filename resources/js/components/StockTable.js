import React, {useState} from 'react';
import {Table, Container, Row, Col, Spinner, Modal, Button} from 'react-bootstrap';
import DayPicker from 'react-day-picker';
import 'react-day-picker/lib/style.css';
import { css } from "@emotion/core";
// First way to import
import { BounceLoader } from "react-spinners";
const override = css`
  display: block;
  margin: 0 auto;
  border-color: red;
`;

// 在庫現況を入力できる入力板を表示
const StockTable = ({ stockTableInfo, insertData }) => {

  // modal flag
  const [show, setShow] = useState(false);

  // modalHandling
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  let tableItems = null;
  const emptyErrorMsg = '項目が有りません。';
  const isPending = (
    <Container style={{marginTop: "500px"}} >
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

  // カレンダーモーダル
  const modal = (
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
        
  if (stockTableInfo.stockItems.length !== 0) {
    tableItems = stockTableInfo.stockItems.map(middleCategory => {
      const items = middleCategory.items.map(item => {
        let stockCount = 0;
        item.stocks.map(stock => {
            if (stock.stock_status === 1) {
              stockCount -= stock.stock_count;
            } else {
              stockCount += stock.stock_count;
            }
          return stock;
        });
        return <tr key={item.id} id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id}>
          <td>{item.name}</td>
          <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="export" onInput={insertData} ></td>
          <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="import" onInput={insertData} ></td>
          <td onClick={handleShow}>{stockCount}</td>
        </tr>;
      });
      return <Col xs={4} key={middleCategory.id}>
        <h1>{middleCategory.name}</h1>
        <Table responsive striped bordered hover>
          <thead>
            <tr>
              <th>商品名</th>
              <th>出荷</th>
              <th>製造</th>
              <th>在庫</th>
            </tr>
          </thead>
          <tbody>
           {(items.length !==0 ? items : <tr><td colSpan="4">{emptyErrorMsg}</td></tr>)}
          </tbody>
        </Table>
      </Col>
    });
  }
  return (
    <div>
      {(stockTableInfo.isPending) ? isPending : null}
      {(stockTableInfo.stockItems.length === 0) ? 
      <h1 style={{marginTop: "100px"}}>{stockTableInfo.error}</h1> 
      : (
        <Container style={{marginTop: "100px"}} >
          <Row>
            { tableItems }
          </Row>
          { modal }
        </Container>
      )}
    </div>
  );
};

export default StockTable;

