<?php
//GD库的具体绘画坐标轴：

//1.创建画布，准备颜色
//$im = imagecreate(400,400); //创建一个基于调色板画布
$im = imagecreatetruecolor(400,400); //创建一个真彩画布
$bg = imagecolorallocate($im,220,220,220); //准备颜色
$red = imagecolorallocate($im,255,0,0); //准备颜色
$blue = imagecolorallocate($im,0,0,255); //准备颜色

//2.开始绘画
imagefill($im,0,0,$bg);

//绘制垂直和水平坐标轴
imageline($im,50,50,50,350,$blue);
imageline($im,50,350,350,350,$blue);
//绘制上箭头
imageline($im,50,50,55,65,$blue);
imageline($im,50,50,45,65,$blue);
//绘制右箭头
imageline($im,335,345,350,350,$blue);
imageline($im,335,355,350,350,$blue);
//绘制水平刻度
for($i=100;$i<=300;$i+=50){
    imageline($im,$i,345,$i,350,$blue);
}
//绘制垂直刻度
for($i=100;$i<=300;$i+=50){
    imageline($im,50,$i,55,$i,$blue);
}

//3.输出图像
header("Content-Type:image/png"); //设置响应类型
imagepng($im); //输出图片

//图片另存为
//imagejpeg($im,"./a.jpg");

//4.释放资源
imagedestroy($im);

