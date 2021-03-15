<?php
namespace file;//命名一般与文件名相同
// phpinfo();
require_once "./upBase.php";//一次
use file\Base\Checkfile;
print_r($_FILES);
echo "<br>";
// echo exec('whoami');//查看使用nginx的用户
// echo $_FILES['file']['type'];
/*
文件引入
1.include
2.require
2.require_once
*/
// include "./upBase.php";//报错会中断 引用一个文件 后面继续的话会覆盖
// require "./upBase.php";//报错不会中断 psr2规范？

class SaveFile extends CheckFile{
    var $SaveFileName;
    const aTagStyle = 
    "
    display:inline-block;
    width:  100px;
    height: 120px;
    margin :  5px;
    ";
    public function moveFile($fileName,$path){
        $flag = false;
        if(file_exists($path.$_FILES["file"]["name"])){//检查是否存在同名文件
            $this -> errorInfo(true,$this::ErrorFile);
        }else{
            $this -> SaveFileName = $path;
            $flag = move_uploaded_file($fileName,$path);
        }
        $resTest = $flag ? "文件写入成功" : "文件写入失败" ;
        echo $resTest;
        return $flag;
    }
    public function downFile(){
        echo "被点击了";
    }
    public function showDownFile($flag,$fileName){
        if($flag){
            $dirFileArr = array_slice(scandir("upLoad"),2);

            $style = $this::aTagStyle;
            echo "<br>";
            foreach($dirFileArr as $k => $v){
                echo "
                    <div style = '$style'>
                        <a style='display:block' href ='upLoad/$v' download = 'upLoad/$v' > 
                            <img width = 100px; height=100px; src = 'upLoad/$v' />
                        </a> 
                        <span>点击图片下载</span>
                    </div>";
            }
        }
    }
}

$fileObj = new SaveFile();//实例化对象

//检查文件名及大小，检测失败报错
$typeRes = $fileObj -> checkType($_FILES['file']['type']);
$sizeRes = $fileObj -> checkFileSize($_FILES['file']['size'],1048576);

$fileObj -> errorInfo(!$typeRes['flag'],$fileObj::ErrorType);
$fileObj -> errorInfo(!$sizeRes,$fileObj::ErrorSize);

//设置文件名 -> 时间+后缀
$_FILES['file']['name'] = $fileObj ->setFilename($_FILES['file']['name']).$typeRes["suffix"];

//存储到本地
$saveFlag = $fileObj -> moveFile($_FILES['file']['tmp_name'],"upLoad/".$_FILES['file']['name']);

//下载
$fileObj -> showDownFile($saveFlag,$fileObj -> SaveFileName);


// php文件不需要结束?>

