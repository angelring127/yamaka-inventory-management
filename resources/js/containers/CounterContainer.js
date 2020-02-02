import React, { useCallback } from 'react';
import Counter from '../components/Counter';
import { INCREMENT, DECREMENT } from '../modules/counter';
import { useSelector, useDispatch } from 'react-redux';



const CounterContainer = () => {

  // 리덕스로부터 카운터 데이터를 내려 받음
  const counter = useSelector(state => state.counter, []);
  
  const dispatch = useDispatch();

  // 액션 생성
  const onIncrement = useCallback(() => dispatch({ type: INCREMENT }),[dispatch]);
  const onDcrement = useCallback(() => dispatch({ type: DECREMENT }),[dispatch]);

  return (
    <Counter number={counter} onIncrease={onIncrement} onDecrease={onDcrement} />
  );
}

export default CounterContainer;