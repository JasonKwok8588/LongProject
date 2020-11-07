import React from "../../ReactWX.js";

function P() {
  this.state = {
    text: 'hello, nanachi'
  };
}

P = React.toClass(P, React.Component, {
  componentDidMount: function () {
    // eslint-disable-next-line
    console.log('page did mount!');
  },
  componentWillMount: function () {
    // eslint-disable-next-line
    console.log('page will mount!');
  },
  render: function () {
    var h = React.createElement;
    return h("view", null, this.state.text);;
  },
  classUid: "c542"
}, {});
Page(React.registerPage(P, "pages/home/index"));
export default P;