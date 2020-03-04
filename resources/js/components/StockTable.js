import React, {useState, useEffect} from 'react';
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

/**
 * 待機中画面
 */
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

/**
 * テーブル内容を作成
 */
const setTable = (stockTable, handlerInsertStock, handleShow, constText) => {
  return stockTable.stockItems.map(middleCategory => {
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
        <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="export" onInput={handlerInsertStock} ></td>
        <td contentEditable="true" item_id={item.id} big_category_id= {item.big_category_id} middle_category_id= {item.middle_category_id} suppressContentEditableWarning={true} name="import" onInput={handlerInsertStock} ></td>
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

//在庫入力をリストに追加 
const insertData = (e, insertStockDataList) => {
  let beforeInsertStockDataList = insertStockDataList;
  const currentTarget = e.currentTarget;
  const itemId = currentTarget.getAttribute('item_id');
  const middleCategoryId = currentTarget.getAttribute('middle_category_id');
  const bigCategoryId = currentTarget.getAttribute('big_category_id');
  const status = (currentTarget.getAttribute('name') === "export") ? 1 : 2;
  const checkCode = bigCategoryId + middleCategoryId + itemId + status;
  // 数字以外文字を入力する場合削除
  if(isNaN(Number(currentTarget.innerHTML))) {
    currentTarget.innerHTML = currentTarget.innerHTML.replace(/\D/,'');
  } else {
    const stockCount = Number(currentTarget.innerHTML);
    if (stockCount === 0) { 
      beforeInsertStockDataList = beforeInsertStockDataList.filter(stockData => {
        const check = stockData.big_category_id + stockData.middle_category_id + stockData.item_id + stockData.stock_status;
        return check !== checkCode;
      });
    } else {
      let isDuplicate = false;
      beforeInsertStockDataList = beforeInsertStockDataList.map(stockData => {
        const check = stockData.big_category_id + stockData.middle_category_id + stockData.item_id + stockData.stock_status;
        if (check === checkCode) {
          isDuplicate = true;
          stockData.stock_count = stockCount;
        }
        return stockData;
      });
      if (!isDuplicate) {
        // 項目追加
        beforeInsertStockDataList[beforeInsertStockDataList.length] = {
          stock_status : status,
          stock_count : stockCount,
          item_id : itemId,
          middle_category_id : middleCategoryId,
          big_category_id: bigCategoryId
        };
      }
    }
    return beforeInsertStockDataList;
  }
  return insertStockDataList;
};

// 在庫現況を入力できる入力板を表示
const StockTable = ({ selectItem, handler }) => {
  const constText = useSelector( state => state.constText, []);
  const stockTable = useSelector(state => state.stockTable, []);
  // modal flag
  const [show, setShow] = useState(false);
  const [tableItems, setTableItems] = useState(null);
  
  const [insertStockDataList, setInsertStockDataList] = useState([]);

  // modalHandling
  const handleClose = () => setShow(false);
  const handleShow = (item) => {
    selectItem(item)
    setShow(true);
  };

  const handlerInsertStock = e => {
    const result = insertData(e, insertStockDataList);
    console.log(result);
    setInsertStockDataList(result);
    console.log(insertStockDataList);
  }
  
  // 在庫登録Action
  useEffect(() => {
    if (stockTable.isInsertStockData) {
      if (insertStockDataList.length > 0) {
        const param = insertStockDataList;
        setInsertStockDataList([]);
        handler.insertStockData(param);
      } else {
        handler.handleCancelInsertStockData();
        handler.handleShowAlert();
      }
    }
  },[stockTable.isInsertStockData])

  useEffect(() => {
    if (stockTable.stockItems.length !== 0 && !stockTable.isPending) {
      setTableItems(setTable(stockTable, handlerInsertStock, handleShow, constText));
    }
  },[stockTable.stockItems, insertStockDataList]);
  
  
  return ((stockTable.isPending) ? isPending : 
    (
      <Container style={{marginTop: "100px"}} >
        <Row>
          { (stockTable.stockItems.length === 0) ?  <h1 style={{marginTop: "100px"}}>{stockTable.error}</h1> : tableItems }
        </Row>
        <CalendarModal show={show} handleClose={handleClose} item = {stockTable.selectedItem}/>
      </Container>
    )
  );
};

export default StockTable;

