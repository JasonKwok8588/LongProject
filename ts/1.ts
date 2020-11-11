// 类型注解:为函数或变量添加约束
let temp: String = 'temp';
function fun(paramA: String) {
    console.log(paramA);
}

fun(temp);

//接口:interface

interface example {
    name: String;
    sex: Number;
    graid: String;
}

let table = [{
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
},]


function getPersionInfo(Example: example) {
    let name = Example.name
    let sex = Example.sex
    let graid = Example.graid
    let result = table.filter(item => {
        return item.name === name && item.graid === graid && item.sex === sex
    })
    return result;
}
 let person = {name:'Jason',sex:1,graid:'a'}

 console.log('getPersionInfo:',getPersionInfo(person))