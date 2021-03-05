// 类型注解:为函数或变量添加约束
// let temp: String = 'temp';
// function fun(paramA: String) {
//     console.log(paramA);
// }
// fun(temp);
/**
 *
 * 接口:interface 表示一种规范的定义,起限制规范作用
 *
 */
//
//特性: 可选属性、只读属性、额外属性检查
// interface Student {
//     name: string;
//     sex: number;
//     graid: string;
//     phone?:string;  //可选参数
//     readonly noClass:number;  //只读属性
// }
// let table = [{
//     name: 'Jason',
//     sex: 1,
//     graid: 'a'
// }, {
//     name: 'Sunny',
//     sex: 2,
//     graid: 'B'
// },
// {
//     name: 'Suny',
//     sex: 1,
//     graid: 'B'
// },]
//option bags:给函数传入的参数对象中只有部分属性被赋值
// function getPersionInfo(Example: Student):{name:string,sex:number,graid:string,detailClass:string} {
//     console.log(Example);
//     let newPerson = {name:'default',sex:1,graid:'A',height:172,noClass:1,detailClass:'A1'}
//     if(Example.name) newPerson.name = Example.name;
//     if(Example.sex) newPerson.sex = Example.sex
//     if(Example.graid) newPerson.graid = Example.graid
//     if(Example.graid&&Example.noClass)newPerson.detailClass = Example.graid+Example.noClass
// let result = table.filter(item => {
//     return item.name === name && item.graid === graid && item.sex === sex
// })
// return newPerson;
// }
//  let person = {name:'Jason',sex:1,graid:'a'}
// let person = {name:'Jason',sex:1,graid:'a',noClass:1}
// let person = {name:'Jason',sex:1,graid:'a',noClass:1,noClasse:'unKnowKey'}
//  console.log('getPersionInfo:',getPersionInfo(person))
// enum Status {Pre = 1,Pedding,Resolve = 5,Errored}
// let s : string = Status[2]
// let e : Status = Status.Errored
// console.log(s,e);
/**
 *
 * 泛型 : 支持多种数据的类型,主要用于解决,函数\类\接口的复用性以及不特定的支持
 *
 */
// console.log('--泛型--');
//函数泛型
// function identity<T>(arg: T): T {
//     return arg;
// }
//带有调用签名的对象-> 函数可以具有属性  
//  js补充: Object.assign() 方法用于将所有可枚举属性的值从一个或多个源对象分配到目标对象。它将返回目标对象。
//  
// let myIdentity: {<T>(arg: T): T} = identity  //function
// console.log(myIdentity(1));
//类泛型
// class MathClass <T>{
//     public list:T[] = [];
//     add(value:T):void{
//         this.list.push(value);
//     }
//     /**
//      * 
//      * @param type min:获取最小值,max:获取最大值
//      */
//     getMinOrMax(type:string = 'min') : T {
//         let value = this.list[0]
//         this.list.forEach(item=>{
//             if(type=='min')value = item > value ? value:item
//             if(type=='max')value = item < value ? value:item
//         })
//         return value
//     };
// }
// let cNum = new MathClass<Number>();
// cNum.add(18.2);
// cNum.add(14.5);
// cNum.add(16);
// cNum.add(17.4);
// cNum.add(16.3);
// console.log(cNum.getMinOrMax('max'),cNum.getMinOrMax('min'))
// let cStr = new MathClass<string>();
// cStr.add('18.2');
// cStr.add('14.5');
// cStr.add('16');
// cStr.add('17.4');
// cStr.add('16.3');
// console.log(cStr.getMinOrMax('max'),cStr.getMinOrMax('min'))
/*
//泛型接口
interface menuConfig<T> {
    (titile: T): T;
};

//接口方法
function  getMenu <T>(user: T): T {
    return user
}

let menus:menuConfig<string> = getMenu
menus('1');
*/
// function create<T>(c: {new(): T; }): T {
//     return new c();
// }
// class BeeKeeper {
//     hasMask: boolean;
// }
// class ZooKeeper {
//     nametag: string;
// }
// class Animal {
//     numLegs: number;
// }
// class Bee extends Animal {
//     keeper: BeeKeeper;
// }
// class Lion extends Animal {
//     keeper: ZooKeeper;
// }
// function createInstance<A extends Animal>(c: new () => A): A {
//     return new c();
// }
// createInstance(Lion).keeper.nametag;  // typechecks!
// createInstance(Bee).keeper.hasMask;   // typechecks!
//实例
var User = /** @class */ (function () {
    //初始化参数
    function User(param) {
        this.userName = param.userName;
        this.passWord = param.passWord;
        this.saveLogin = param.saveLogin;
        this.id = param.id;
    }
    return User;
}());
var userDb = /** @class */ (function () {
    function userDb() {
    }
    userDb.prototype.addUser = function (user) {
        //添加操作
        console.log('addUser', user);
        return true;
    };
    ;
    userDb.prototype.upDate = function (user, Id) {
        //更新操作
        user.id = Id;
        return true;
    };
    ;
    return userDb;
}());
var u = new User({ userName: 'Jason', passWord: '23454' });
u.saveLogin = 0;
var userInfo = new userDb();
console.log(userInfo.addUser(u), u);
console.log(userInfo.upDate(u, 1), u);
