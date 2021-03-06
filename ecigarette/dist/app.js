import React from "./ReactWX.js";

function Global(...args) {
  this.globalData = {
    buildType: "wx"
  };
}

Global = React.toClass(Global, React.Component, {
  onLaunch: function () {
    //针对快应用的全局getApp补丁
    if (this.$data && typeof global === 'object') {
      var ref = Object.getPrototypeOf(global) || global;

      var _this = this;

      this.globalData = this.$def.globalData;

      ref.getApp = function () {
        return _this;
      };
    }

    console.log('App launched'); //eslint-disable-line
  },
  classUid: "c877"
}, {}); // eslint-disable-next-line

Global.config = {
  window: {
    navigationBarBackgroundColor: '#00afc7',
    backgroundTextStyle: 'light',
    navigationBarTitleText: 'nanachi',
    navigationBarTextStyle: 'white'
  }
};
export default App(new Global());