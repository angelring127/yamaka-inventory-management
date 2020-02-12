import React from 'react';
import { ButtonToolbar, Button, Navbar, Nav, NavDropdown, Form, FormControl, Spinner } from 'react-bootstrap';

const Navibar = ({ naviBarInfo, selectNaviItem, handlingInsert, selectRecordTable}) => {
  const naviItems = naviBarInfo.naviItems.map(item => {
    return <Nav.Link active={(item.id === naviBarInfo.currentNaviId)}　key= {item.id} onClick={e => selectNaviItem(item.id) }>{item.name}</Nav.Link>;
  })
  
  return (
    <div>
      <Navbar bg="light" expand="lg" fixed="top" >
        <Navbar.Brand href="/">ヤマカ水産</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="mr-auto" >
            { (naviBarInfo.pending) ? <Spinner animation="border" variant="primary" /> : naviItems}
            <NavDropdown title="設定" id="basic-nav-dropdown">
              <NavDropdown.Item onClick={selectRecordTable} >保存記録</NavDropdown.Item>
              <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
              <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
            </NavDropdown>
          </Nav>
          <Button variant="success" onClick={handlingInsert}>保存</Button>
        </Navbar.Collapse>
      </Navbar>
    </div>
  );
};


export default Navibar;

