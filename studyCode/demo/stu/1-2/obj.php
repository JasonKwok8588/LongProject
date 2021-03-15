<?php
//求两个数之间的奇数偶数
class Odd{//声明类
    public function getNum(){
        $num1 = 13;
        $num2 = 70;
        $arr = [];
        for($i = $num1;$i<=$num2;$i++){
           if($i%2 != 0){
               $arr[] = $i;//与push
           } 
           return $arr;
        }
    }
}
class Even{
    public function getNum(){
        $num1 = 13;
        $num2 = 70;
        $arr = [];
        for($i = $num1;$i<=$num2;$i++){
           if($i%2 == 0){
               $arr[] = $i;//与push
           } 
           return $arr;
        }
    }
}
function prints($obj){
    $obj->getNum(); 
    $array = $obj;
    print $array;
}
new Odd();
?>