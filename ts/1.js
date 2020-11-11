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
function getPersionInfo(Example) {
    var name = Example.name;
    var sex = Example.sex;
    var graid = Example.graid;
    var result = table.filter(function (item) {
        return item.name === name && item.graid === graid && item.sex === sex;
    });
    return result;
}
var person = { name: 'Jason', sex: 1, graid: 'a' };
console.log('getPersionInfo:', getPersionInfo(person));
