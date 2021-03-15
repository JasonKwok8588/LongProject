import React from 'react';
import {createStore} from 'redux';

import reducer from '../reducer'

import './App.css';

const store  = createStore(reducer);

const createAddaction = (value) => {
  console.log(value)
  return {
    type:'add',
    playload:value
  }
}
const createCutaction = (value) => {
  return {
    type:'cut',
    playload:value
  }
}

class App extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      value:1,
    }

    store.subscribe(this.listen)//订阅监听 3. 监听store里的状态有改变是会触发句柄，就是这个对象中的listen函数

  }

  addAction =() => {
    //1. 点击按钮后触发这个函数dispatch分发 这里是添加的动作，下一步会触发reducer
    store.dispatch(createAddaction(this.state.value))
    //这里相当于store.dispatch({type:add,playload:this.state.value}),注意这里的createAddAction()函数的返回值，
  }

  cutAction =()=>{
    //1.点击按钮后触发这个函数dispatch分发 这里是减少的动作，下一步会触发reducer
    store.dispatch(createCutaction(this.state.value))
  
  }
  
  listen = ()=> {
    const {value} = store.getState()//解构解析，获取store状态仓库里的值
    this.setState({value:value})//设置状态
  }

  render(){
    const {value} = this.state;
    return (
      <div className="App">
        <div>
          值是：{value}
        </div>
        <button onClick={this.addAction}>加一</button>
        <button onClick={this.cutAction}>减一</button>
      </div>
    );
  }
}

export default App;
