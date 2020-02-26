import React, {useState} from 'react';
import {Table, Container, Row, Col, Spinner, Modal, Button} from 'react-bootstrap';
import 'react-day-picker/lib/style.css';
import { css } from "@emotion/core";
// First way to import
import { BounceLoader } from "react-spinners";
import CalendarModal from './CalendarModal';
import { useSelector } from 'react-redux';


const override = css`
  display: block;
  margin: 0 auto;
  border-color: red;
`;

// 在庫現況を入力できる入力板を表示
const StockTable = ({ stockTableInfo, insertData, selectItem }) => {

  const constText = useSelector( state => state.constText, []);
  // modal flag
  const [show, setShow] = useState(false);

  // modalHandling
  const handleClose = () => setShow(false);
  const handleShow = (item) => {
    selectItem(item)
    setShow(true);

  };

  let tableItems = null;
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
        
  if (stockTableInfo.stockItems.length !== 0) {
    tableItems = stockTableInfo.stockItems.map(middleCategory => {
      const items = middleCategory.items.map(item => {
        let stockCount = 0;
        // 在庫の計算
        item.stocks.map(stock => {
            if (stock.stock_status === 1) {
              stockCount -= stock.stock_count;
            } else {
              stockCount += stock.currentstock_count;
            }
          return stock;
        });
        return <tr key={item.id} id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id}>
          <td>{item.name}</td>
          <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="export" onInput={insertData} ></td>
          <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="import" onInput={insertData} ></td>
          <td onClick={e => handleShow(item)} item={item.stocks} >{stockCount}</td>
        </tr>;
      });
      return <Col xs={4} key={middleCategory.id}>
        <h1>{middleCategory.name}</h1>
        <Table responsive striped bordered hover>
          <thead>
            <tr>
              <th>{constText.itemName}</th>
              <th>{constText.shipment}</th>
              <th>{constText.manufacture}</th>
              <th>{constText.inventory}</th>
            </tr>
          </thead>
          <tbody>
           {(items.length !==0 ? items : <tr><td colSpan="4">{constText.emptyErrorMsg}</td></tr>)}
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
          <CalendarModal show={show} handleClose={handleClose} item = {stockTableInfo.selectedItem}/>
        </Container>
      )}
    </div>
  );
};

export default StockTable;

