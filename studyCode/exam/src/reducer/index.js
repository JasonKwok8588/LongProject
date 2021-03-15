let defaValue = 1//state的默认值

export default function reducer(state = defaValue, action){
    console.log(action,state)
    switch(action.type){//根据传过来的action.type 返回不同的值，到sotre中
        case 'add':
            console.log(action.playload+1)
            //这里可以写一些业务上的逻辑，这里比较简单直接在return时 state +1 就可以了；    
            return {
                ...state,
                value:action.playload+1
            }

        case 'cut':
    
        return {
            ...state,
            value:action.playload-1
        };

        default://默认返回state
     
        return state;
    }  
}