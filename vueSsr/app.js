//创建实例
const Vue = require('vue');
const app = new Vue({
    template: '<p>ssrssr测试ssrssr</p>'
})

//创建render
const render = require('vue-server-renderer').createRenderer();

//渲染实例
render.renderToString(app, (e, html) => {
    try {
        if (e) throw e;
        console.log(html);
    } catch (e) {
        console.log(e);
    }
})
// 2.5.0 or
render.renderToString(app).then((html)=>{
    console.log(html);
}).catch((e)=>{
    console.log('e',e);
})