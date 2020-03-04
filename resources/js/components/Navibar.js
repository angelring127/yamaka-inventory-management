import React, { useState, useEffect } from 'react';
import { ButtonToolbar, Button, Navbar, Nav, NavDropdown, Form, FormControl, Spinner, Alert } from 'react-bootstrap';
import CommonModal from './CommonModal';
import { useSelector } from 'react-redux';

// 入力内容がない場合アラート
const alert = <Alert style={{marginTop: "75px"}} variant="danger" onClose={() => setShow(false)} dismissible>
<Alert.Heading>Oh snap! You got an error!</Alert.Heading>
<p>
  Change this and that and try again. Duis mollis, est non commodo
  luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
  Cras mattis consectetur purus sit amet fermentum.
</p>
</Alert>;

const Navibar = ({ selectNaviItem, handlingInsert, selectRecordTable }) => {
  // modal flag
  const [show, setShow] = useState(false);
  // modalHandling
  const handleClose = () => setShow(false);
  const handleShow = () => {
    setShow(true);
  };

  // 在庫入力
  const handleInsert = () => {
    handlingInsert();
    handleClose();
  }

  // 文言object
  const constText = useSelector(state => state.constText, []);
  // navigation Info
  const naviBarInfo = useSelector(state => state.navibar, []);


  const naviItems = naviBarInfo.naviItems.map(item => {
    return <Nav.Link active={(item.id === naviBarInfo.currentNaviId)} key={item.id} onClick={e => selectNaviItem(item.id)}>{item.name}</Nav.Link>;
  })

  useEffect(() => {
    console.log(naviBarInfo.isAlert);
  },[naviBarInfo.isAlert])

  return (
    <div>
      <Navbar bg="light" expand="lg" fixed="top" >
        <Navbar.Brand href="/">ヤマカ水産</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="mr-auto" >
            {(naviBarInfo.pending) ? <Spinner animation="grow" variant="primary" /> : naviItems}
            <NavDropdown title="設定" id="basic-nav-dropdown">
              <NavDropdown.Item onClick={selectRecordTable} >保存記録</NavDropdown.Item>
              <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
              <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
            </NavDropdown>
          </Nav>
          <Button variant="success" onClick={handleShow}>{constText.saveModal.function}</Button>
        </Navbar.Collapse>
      </Navbar>
      <CommonModal show={show} handleClose={handleClose} context = {constText.saveModal} handler={handleInsert} />
      { naviBarInfo.isAlert && alert}
    </div>
  );
};


export default Navibar;

