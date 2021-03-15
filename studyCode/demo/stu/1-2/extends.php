<?php
//继承例子：
//求两个数之间的奇数偶数

class Base{//声明类
    public function getOdd(int $num1,int $num2){//int设定 变量约束
        $arr = [];
        for($i = $num1 ; $i <= $num2 ; $i++){
           if($i % 2 != 0){
               $arr[] = $i;//与push
           }
        }
        return $arr;
    }

    public static function getEven($num1 = null,$num2 = null){
        $num1 = 13;
        $num2 = 70;
        $arr = [];
        for($i = $num1;$i<=$num2;$i++){
           if($i%2 == 0){
               $arr[] = $i;//与push
           }   
        }
        return $arr;
    }
}
class GetNum extends Base{
    public function randNum(){
        return mt_rand(1,100);//随机数 性能更高
    }
    public function getArray(){
        $num1 = $this ->randNum();
        $num2 = $this ->randNum();
        if($num1>$num2){
           $max = $num1;
           $min = $num2;
        }else{
            $max = $num2;
            $min = $num1;
        }
        return $this -> getOdd($min,$max);
    }

}
$num = new GetNum();
$arr = $num -> getArray();
print_r($arr);
Base::getEven();

/*
        public(公开的)    protected(受保护的)   private(私有的)
本类中     Y                 Y                   Y

子类中     Y                 Y                   N

类外       Y                 N                   N

魔术方法
__autoload //自动加载


*/
// 依赖注入
// 抽象类
// 根据多态去研究单例设计模式
// 类的异常处理
?>