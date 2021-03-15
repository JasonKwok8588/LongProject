<!DOCTYPE html>
<html lang="en">

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        请输入需检测字符:<input type="text" name="testStr">
        <input name="submit" type="submit" value='提交！'>

    </form>

    <?php

    if ($_POST["submit"]) {

        $testStr =  $_POST["testStr"];
        $resArr = [];
        $putArr = [];
        function splitStr($string, $len = 1){//切割字符串为数组
            $start = 0;
            $strlen = mb_strlen($string);//获取字符串长度
            while ($strlen) {
                $array[] = mb_substr($string, $start, $len, "utf8");//提取字符，推进数组
                $string = mb_substr($string, $len, $strlen, "utf8");//更新字符串及长度
                $strlen = mb_strlen($string);
            }
            return $array;
        }
        $char = "。、！？：；﹑＂…‘’“”∕|—　〈〉﹞￥﹝「」、〖〗】【』『》《¯＿￣，（）～`@#%&*";
        $testStr = preg_replace(["/[[:punct:]]/i",'/['.$char.']/u','/[ ]{2,}/'],"",$testStr);
        $putArr = splitStr($testStr);
        function countArr($arr){//返回数组统计信息 值为键名，数量为键值
            $newArr = [];
            for ($z = 0; $z < count($arr); $z++) {
                $i = 0;
                $j = 0;
                while ($i < count($arr)) {
                    $arr[$z] == $arr[$i] ? $j ++ : $j;
                    $i++;
                };
                $newArr[$arr[$z]] = $j;
                $z++;
            }

            return $newArr;
        }
        $strArr = countArr($putArr);
        arsort($strArr); //根具键值进行排序
        $resArr["str"] = array_slice($strArr, 0, 3,true);
        $resArr["diff"] = count($strArr);
        print_r($resArr);
        echo "<br>";
    }




    ?>


</body>

</html>