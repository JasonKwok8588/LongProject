// ES 6+7+8+9

//操作符 ...

function copyObj(){
    let obj = {a:1,b:{c:555},same:'obj'};
    let obj2 = {...obj,same:'obj2'}//有复制效果，相同键名以最后为准
    let obj3 = obj
    obj.b = {c:2}
    console.log(obj,obj2,obj3);
}
copyObj()

//for await of 9 
function Gen(time) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            resolve(time)
        }, time)
    })
}
async function test() {
    let arr = [Gen(2000), Gen(100), Gen(3000)]
    for await (let item of arr) {
        console.log(Date.now(), item)
        return item
    }
}
// test()
interface 