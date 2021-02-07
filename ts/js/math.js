
let mathNum = (a,type,b)=>{
    let temp1
    let temp2
    try {
      temp1 = a.toString().split('.')[1].length
    } catch (e) {
      temp1 = 0
    }
    try {
      temp2 = b.toString().split('.')[1].length
    } catch (e) {
      temp2 = 0
    }

    let num = Math.pow(10, Math.max(temp1, temp2))

    let resNum = 0
    switch (type) {
      case '+':
        resNum = (Math.round(num * a) + Math.round(num * b)) / num
        
        break
      case '-':
        resNum = (Math.round(num * a) - Math.round(num * b)) / num
        break
      case '*':
        resNum = (Math.round(num * a) *Math.round(num * b)) / num
        
        break
      case '/':
        resNum = Math.round(num * a) / Math.round(num * b) 

        break
      default:
        resNum = (Math.round(num * a) - Math.round(num * b)) / num
        break
    }

    return resNum
  }


  console.log(mathNum('/',0.05,0.2))