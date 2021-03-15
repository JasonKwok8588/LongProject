<?php
//绘制验证码

//初始化变量
$length=6;
$code = getCode($length,2);
$width=$length*18;
$height=30;

//1.创建画布，准备颜色
$im = imagecreatetruecolor($width,$height); //创建一个真彩画布
$bg[0] = imagecolorallocate($im,220,220,220); //准备颜色
$bg[1] = imagecolorallocate($im,159,213,217); //准备颜色
$bg[2] = imagecolorallocate($im,223,162,230); //准备颜色
$c[0] = imagecolorallocate($im,255,0,0); //准备颜色
$c[1] = imagecolorallocate($im,0,0,255); //准备颜色
$c[2] = imagecolorallocate($im,158,24,115); //准备颜色
$c[3] = imagecolorallocate($im,17,104,108); //准备颜色
$c[4] = imagecolorallocate($im,19,89,19); //准备颜色
$c[5] = imagecolorallocate($im,102,97,28); //准备颜色

//2.开始绘画
imagefill($im,0,0,$bg[rand(0,2)]);//填充背景


//绘制验证码内容
for($i=0;$i<$length;$i++){
  imagettftext($im,20,rand(-30,30),5+$i*15,22,$c[rand(0,5)],"./msyh.ttf",$code[$i]);
}

//添加干扰点和线
for($i=0;$i<50;$i++){
    $cc = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($im,rand(0,$width),rand(0,$height),$cc);
}
for($i=0;$i<4;$i++){
    $cc = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imageline($im,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$cc);
}


//3.输出图像
header("Content-Type:image/png"); //设置响应类型
imagepng($im); //输出图片


//4.释放资源
imagedestroy($im);


/**
 * 自定义一个随机验证的函数
 *@param int $length 随机验证码的长度 默认4
 *@param int $type 类型：1:纯数字（默认） 2：数字加小写字母， 3或其他表示数字加大小字母
 *@return string 返回验证码的值
 */
function getCode($length=4,$type=1){
    //定义字符源
    $str="0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //设置随机的长度
    $m=strlen($str)-1; //全部
    if($type==1){
        $m=9; //纯数字
    }elseif($type==2){
        $m=33; //数字加小写字母
    }
    //随机指定长度的验证码
    $code="";
    for($i=0;$i<$length;$i++){
        $code .= $str[rand(0,$m)]; //随机一个验证码
    }
    //返回结果
    return $code;
}
