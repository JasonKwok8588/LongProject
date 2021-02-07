"use strict";
// 类型注解:为函数或变量添加约束
var temp = 'temp';
function fun(paramA) {
    console.log(paramA);
}
fun(temp);
var table = [{
        name: 'Jason',
        sex: 1,
        graid: 'a'
    }, {
        name: 'Sunny',
        sex: 2,
        graid: 'B'
    },
    {
        name: 'Suny',
        sex: 1,
        graid: 'B'
    },];
//option bags:给函数传入的参数对象中只有部分属性被赋值
function getPersionInfo(Example) {
    console.log(Example);
    var newPerson = { name: 'default', sex: 1, graid: 'A', height: 172, noClass: 1, detailClass: 'A1' };
    if (Example.name)
        newPerson.name = Example.name;
    if (Example.sex)
        newPerson.sex = Example.sex;
    if (Example.graid)
        newPerson.graid = Example.graid;
    if (Example.graid && Example.noClass)
        newPerson.detailClass = Example.graid + Example.noClass;
    // let result = table.filter(item => {
    //     return item.name === name && item.graid === graid && item.sex === sex
    // })
    return newPerson;
}
//  let person = {name:'Jason',sex:1,graid:'a'}
// let person = {name:'Jason',sex:1,graid:'a',noClass:1}
var person = { name: 'Jason', sex: 1, graid: 'a', noClass: 1, noClasse: 'unKnowKey' };
console.log('getPersionInfo:', getPersionInfo(person));
