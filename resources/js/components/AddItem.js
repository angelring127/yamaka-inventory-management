/**
 * AddItem.js
 * 在庫項目追加画面
 */

import React, { useState } from 'react';
import { useSelector } from 'react-redux';

import { Table, Container, Row, Form, Col, Modal, Button, Card } from 'react-bootstrap';
import CommonModal from './CommonModal';
import IsPending from './IsPending';

import '../app.css';


/**
 * 在庫項目追加
 */
const AddItem = ({ handleAddItem }) => {
  const constText = useSelector(state => state.constText, []);
  const stockItem = useSelector(state => state.stockItem, []);

  const [selectedRecordId, setSelectedRecordId] = useState(null);
  // modal flag
  const [show, setShow] = useState(false);
  // modalHandling
  const handleClose = () => setShow(false);
  const handleShow = (recordId) => {
    setShow(true);
    setSelectedRecordId(recordId);
  };

  const [middleCategorySelect, setMiddleSelect] = useState(null);
  const [inputItemName, setInputItemName] = useState(null);
  const [addItemInfo, setAddItemInfo] = useState({
    big_category_id: null,
    middle_category_id: null,
    name: null
  });
  const [addBtn, showAddBtn] = useState(null);

  //　bigCategoryをプルダウンItemに作成
  const bigCategoryOption = (stockItem.stockItemList.length > 0) 
    ? stockItem.stockItemList.map(item => <option key={item.id} value={item.id}>{item.name}</option>)
    : null;

  const handleAdd = () => {
    if (addItemInfo.big_category_id !== null && addItemInfo.middle_category_id !== null && addItemInfo.name !== null) {
      handleAddItem(addItemInfo);
    }
  }
  // 商品名を入力すると登録ボタン表示
  const handleInputItem = e => {
    const itemName = e.target.value;
    if (itemName) {
      addItemInfo.name = itemName;
      showAddBtn(setAddBtn(constText,handleAdd));
    } else {
      showAddBtn(null);
      addItemInfo.name = null;
    }
    setAddItemInfo(addItemInfo);
  }
  // MiddleCategoryが選択された時在庫の入力欄を表示
  const changeMiddleCategory = e => {
    const middleCategoryId = e.target.value;
    if (middleCategoryId) {
      addItemInfo.middle_category_id = middleCategoryId;
      setInputItemName(setInputItem(constText, handleInputItem, constText.emptyItemNameErrorMsg));
    } else {
      setInputItemName(null);
      showAddBtn(null);
      addItemInfo.middle_category_id = null;
    }
    setAddItemInfo(addItemInfo);
  }
  // Bigcategoryが選択された時選択されたMiddleCategoryリストをプルダウンメニューで表示
  const changeBigCategory = e => {
    const bigCategoryId = e.target.value;
    if (bigCategoryId) {
      const selectedBigCategory　= stockItem.stockItemList.filter(item => item.id == bigCategoryId)[0];
      setMiddleSelect(setMiddleCategorySelect(selectedBigCategory.middle_categories, constText, changeMiddleCategory));
      addItemInfo.big_category_id = bigCategoryId;
    } else {
      setMiddleSelect(null);
      addItemInfo.big_category_id =　null;
    }
    
    setInputItemName(null);
    showAddBtn(null);
    addItemInfo.middle_category_id =　null;
    addItemInfo.name =　null;
    setAddItemInfo(addItemInfo);
  }

  return ((stockItem.isPending) ? IsPending : <Container style={{ marginTop: "100px" }}>
    <Row md="auto">
      <Col >
        <Card>
          <Card.Header><h2>{constText.menuAdd}</h2></Card.Header>
          <Card.Body>
            <Form.Group controlId="exampleForm.ControlSelect1">
              <Form.Label>{constText.bigCategory}</Form.Label>
              <Form.Control as="select" onChange={changeBigCategory} >
                <option></option>
                {bigCategoryOption}
              </Form.Control>
            </Form.Group>
          </Card.Body>
          {middleCategorySelect}
          {inputItemName}
          {addBtn}
        </Card>
      </Col>
    </Row>
    <CommonModal show={show} handleClose={handleClose} context={constText.deleteRecordModal} />
  </Container>);
};

// MiddleCategoryListをプルダウンで作成
const setMiddleCategorySelect = (middleCategoryList, constText, changeMiddleCategory) => {
  //　middleCategoryをプルダウンItemに作成
  const middleCategoryOption = (middleCategoryList.length > 0) ?
    middleCategoryList.map(item => <option key={item.id} value={item.id} bigcategoryid={item.big_category_id} >{item.name}</option>)
    : null;
  return (
    <Card.Body>
      <Form.Group controlId="exampleForm.ControlSelect1">
        <Form.Label>{constText.middleCategory}</Form.Label>
        <Form.Control as="select" onChange={changeMiddleCategory}>
          <option></option>
          {middleCategoryOption}
        </Form.Control>
      </Form.Group>
    </Card.Body>
  );
}

// 在庫名入力部分表示
const setInputItem = (constText, handleInputItem, errorMessage) => {
  return (
    <Card.Body>
      <Form.Group controlId="exampleForm.ControlSelect1">
        <Form.Label>{constText.itemName}</Form.Label>
        <Form.Control type="text" onChange={handleInputItem} />
        <Form.Text className="text-muted">
          {errorMessage}
        </Form.Text>
      </Form.Group>
    </Card.Body>
  )
}

const setAddBtn = (constText, handleAdd) => {
  return (
    <Card.Body>
      <Row>
        <Col md={{ span: 2, offset: 11 }}>
        <Button variant="primary" onClick={handleAdd} >
        {constText.btnAdd}
      </Button>
        </Col>
      </Row>
    </Card.Body>
  );
}

export default AddItem;
