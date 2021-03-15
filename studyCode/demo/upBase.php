<?php

namespace file\Base;

class CheckFile{
    //验证类型 返回后缀和结果
    public function checkType($type){
        $resArr = null;
        switch($type){
            case  "image/jpeg" :
                $resArr['flag'] = true;
                $resArr['suffix'] = ".jpeg";
            break;
            case  "image/png" :
                $resArr['flag'] = true;
                $resArr['suffix'] = ".png";
            break;
            case  "image/jpg" :
                $resArr['flag'] = true;
                $resArr['suffix'] = ".jpg";
            break;
            default:
                $resArr['flag'] = false;
                $resArr['suffix'] = $type;
            break;
        }
        echo '文件类型是：'.$resArr['suffix'];
        echo "<br>";
        return $resArr;
    }
    //验证文件大小 1048576（1M） 如果大于检查失败，小于检查成功
    public function checkFileSize($checkFile,$fileSize){
        return $flag = $checkFile > $fileSize ? false :  true;
    }
    const ErrorSize = "<span style='color:red;'> 发生错误,上传文件大小不大于1M！ </span>";
    const ErrorType = "<span style='color:red;'> 发生错误，上传文件仅支持jpg,png,jpeg格式！ </span>";
    const ErrorFile = "<span style='color:red;'> 发生错误，上传文件在保存时重名！ </span>";
    //错误函数
    public function errorInfo($condition,$errorText){
        // !checkType($_FILES['file']['type'])
        // echo "<span style='color:red;'> 发生错误，上传文件仅支持jpg,png,jpeg格式，且文件大小不大于1M！ </span>";
        if($condition){
            echo "<br>";
            echo $errorText;
            exit();
        }
    }
    //设置文件名为日期 返回时间字符串
    public function setFilename($fileName){
        $fileName = date("Y-m-t").md5(mt_rand());
        return $fileName;
    }
}
