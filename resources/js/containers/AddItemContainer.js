/**
 * 在庫項目を追加するContainer
 * AddItemContainer.js
 */

import React, { useEffect } from 'react';
import AddItem from '../components/AddItem';
import * as fetchStockItem from '../fetch/fetchStockItem';
import { useSelector, useDispatch } from 'react-redux';


const AddItemContainer = () => {
  const dispatch = useDispatch();
  const recordInfo = useSelector(state => state.record, []);

  useEffect(() => {
    if (!recordInfo.pending) {
      dispatch(fetchStockItem.getStockItemList());
    }
  }, [])

  const handleAddItem = (itemData) => {
    dispatch(fetchStockItem.addItem(itemData));
  };
  return <AddItem handleAddItem={handleAddItem} />;
};

export default AddItemContainer;