let str: String = 'string';

interface Person {
    name: String,
    age: Number
}
 
export function testFun(userInfo: Person) {
    try {
        userInfo.name
        userInfo.age
        let phone: Number
        return { phone: 17147896542 }
    } catch (e) {
        console.log(e);

        return e
    }
}
