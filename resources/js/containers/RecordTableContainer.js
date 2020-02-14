import React, { useEffect } from 'react';
import RecordTable from '../components/RecordTable';
import * as fetchRecord from '../fetch/fetchRecordTable';
import { useSelector, useDispatch } from 'react-redux';


const RecordTableContainer = () => {
  const dispatch = useDispatch();
  const recordInfo = useSelector(state => state.record, []);
  useEffect(() => {
    if (!recordInfo.pending) {
      dispatch(fetchRecord.getRecordList());
    }
  }, [])
  return <RecordTable></RecordTable>;
};

export default RecordTableContainer;