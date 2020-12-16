/**
 * StockTable.js
 * 在庫管理画面
 */

import React, { useState, useEffect } from 'react';
import { Table, Container, Row, Col, Spinner, Modal, Button } from 'react-bootstrap';
import 'react-day-picker/lib/style.css';
import '../app.css';
import { css } from "@emotion/core";
// First way to import
import { BounceLoader } from "react-spinners";
import CalendarModal from './CalendarModal';
import { useSelector } from 'react-redux';
import IsPending from './IsPending';

/**
 * テーブル内容を作成
 */
const setTable = (stockTable, handlerInsertStock, handleShow, constText) => {
  const tableitems = stockTable.stockItems.map(middleCategory => {
    const items = [];
    let item_index = 0;
    for (let index = 0; index < middleCategory.lows; index++) {
      if ( item_index in middleCategory.items  && middleCategory.items[item_index].index === index) {
        const item = middleCategory.items[item_index];
        let oldStockDate = null;
        let stockCount = 0;
        let className = '';

        item.stocks.map(stock => {
          if (stock.stock_status === 1) {
            stockCount -= stock.stock_count;
          } else {
            stockCount += stock.currentstock_count;
            const createdAt = new Date(stock.created_at);
            if ( oldStockDate === null || oldStockDate > createdAt) {
              oldStockDate = createdAt;
            }
          }
          return stock;
        });

        if (oldStockDate !== null) {
          const currentDate = new Date();
          // 一番古い在庫の日付で背景色の変更
          const intervalTime = parseInt((currentDate - oldStockDate) / (1000 * 3600 * 24));
          // 20日：黄色
          // 30日：赤色
          // 60日：紫色
          switch (intervalTime) {
            case 2:
              className = 'stock-yellow';
              break;
            case 3:
            case 4:
            case 5:
              className = 'stock-red';
              break;
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
              className = 'stock-purple';
              break;
          }
        }
        const result = (<tr key={item.id} id={item.id} big_category_id={item.big_category_id} middle_category_id={item.middle_category_id}>
          <td className={className} style={{fontSize:"0.8em"}}>{item.name}</td>
          <td contentEditable="true" item_id={item.id} big_category_id={item.big_category_id} middle_category_id={item.middle_category_id} suppressContentEditableWarning={true} name="export" onInput={handlerInsertStock} ></td>
          <td contentEditable="true" item_id={item.id} big_category_id={item.big_category_id} middle_category_id={item.middle_category_id} suppressContentEditableWarning={true} name="import" onInput={handlerInsertStock} ></td>
          <td onClick={e => handleShow(item)} item={item.stocks} >{stockCount}</td>
        </tr>);
        items.push(result);
        item_index++;
      } else {
        const result = (<tr><td colSpan='4' height="49px"></td></tr>);
        items.push(result);
      }
    }
    return (<tbody key={middleCategory.id}>
      <tr><td colSpan='4' className="stock-table-head" ><b>{middleCategory.name}</b></td></tr>
      {(items.length !== 0 ? items : <tr><td colSpan="4">{constText.emptyErrorMsg}</td></tr>)}
    </tbody>)
  });

  return (
    <Row>
      <Col xs={4} key={`1`}>
        <Table responsive striped bordered hover>
          <thead>
            <tr>
              <th>{constText.itemName}</th>
              <th>{constText.shipment}</th>
              <th>{constText.manufacture}</th>
              <th>{constText.inventory}</th>
            </tr>
          </thead>
          {tableitems.slice(0, stockTable.selectedBigcategory.first_sort)}
        </Table>
      </Col>
      <Col xs={4} key={`2`}>
        <Table responsive striped bordered hover>
          <thead>
            <tr>
              <th>{constText.itemName}</th>
              <th>{constText.shipment}</th>
              <th>{constText.manufacture}</th>
              <th>{constText.inventory}</th>
            </tr>
          </thead>
          {tableitems.slice(stockTable.selectedBigcategory.first_sort, stockTable.selectedBigcategory.second_sort)}
        </Table>
      </Col>
      <Col xs={4} key={`3`}>
        <Table responsive striped bordered hover>
          <thead>
            <tr>
              <th>{constText.itemName}</th>
              <th>{constText.shipment}</th>
              <th>{constText.manufacture}</th>
              <th>{constText.inventory}</th>
            </tr>
          </thead>
          {tableitems.slice(stockTable.selectedBigcategory.second_sort)}
        </Table>
      </Col>
    </Row>
  );
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
  if (isNaN(Number(currentTarget.innerHTML))) {
    currentTarget.innerHTML = currentTarget.innerHTML.replace(/[^0-9.]/g, "");
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
          stock_status: status,
          stock_count: stockCount,
          item_id: itemId,
          middle_category_id: middleCategoryId,
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
  const constText = useSelector(state => state.constText, []);
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
    setInsertStockDataList(result);
  }

  // 在庫登録Action
  useEffect(() => {
    if (stockTable.isInsertStockData) {
      if (insertStockDataList.length > 0) {
        const param = insertStockDataList;
        setInsertStockDataList([]);
        if (stockTable.isEdit) {
          handler.editStockData(param);
        } else {
          handler.insertStockData(param);
        }
      } else {
        handler.handleCancelInsertStockData();
        handler.handleShowAlert();
      }
    }
  }, [stockTable.isInsertStockData])

  useEffect(() => {
    if (stockTable.stockItems.length !== 0 && !stockTable.isPending) {
      setTableItems(setTable(stockTable, handlerInsertStock, handleShow, constText));
    }
  }, [stockTable.stockItems, insertStockDataList]);


  return ((stockTable.isPending) ? IsPending :
    (
      <Container style={{ marginTop: "100px" }} >
        {(stockTable.stockItems.length === 0) ? <Row><h1 style={{ marginTop: "100px" }}>{stockTable.error}</h1></Row> : tableItems}
        <CalendarModal show={show} handleClose={handleClose} item={stockTable.selectedItem} />
      </Container>
    )
  );
};

export default StockTable;

