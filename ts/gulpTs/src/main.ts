import { testFun } from './test'


testFun({ name: 'bode', age: 20 })

function showRes(elId: string, name: string, age: number) {
    const el = document.getElementById(elId);
    el.innerText = testFun({ name, age })
}

showRes('app','jason',25)