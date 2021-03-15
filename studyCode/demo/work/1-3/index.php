<?php
// if ($_POST["submit"]) {
    $infoArr =  $_POST;
    // echo "<pre>";
    // print_r($infoArr);
    // die();
    // $infoArr = array_splice($infoArr, 0, 8, true);

    //根据班级推进对应数组
    foreach ($infoArr as $i => $value) {
        switch ($value["class"]) {
            case "一班":
                $classOne[] = $value;
                break;
            case "二班":
                $classTwo[] = $value;
                break;
            case "三班":
                $classThir[] = $value;
                break;
            case "四班":
                $classFour[] = $value;
                break;
            default:
                $classOther[] = $value;
                return;
        };
    }

    function resKey($arr)//设置键名
    {
        $arr = explode(",", $arr);

        $keyArr = ["name", "age", "sex", "class"];
        $newArr = [];
        for ($i = 0; $i < count($keyArr); $i++) {
            $newArr[$keyArr[$i]] = $arr[$i];
        }
        return $newArr;
    }
    function compare($arrs)//去重
    {
        foreach ($arrs as $i => $v) {
            $v = join(",", $v);
            $temp[] = $v;
        }
        $temp = array_unique($temp);
        $j = 1;
        $newArr = [];
        foreach ($temp as  $v) {
            $key = "学生$j";
            $newArr[$key] = resKey($v);
            $j++;
        }
        return $newArr;
    }
    function sortArr($arrSet)//排序
    {
        $arrSet = compare($arrSet);
        $ageClo =  array_column($arrSet, 'age');
        array_multisort($ageClo, SORT_DESC, $arrSet);
        return $arrSet;
    }

    $arr = [
        "classOne" => sortArr($classOne),
        "classTwo" => sortArr($classTwo),
        "classThir" => sortArr($classThir),
        "classFour" => sortArr($classFour),
    ];

    echo "<pre>";
    print_r($arr);
    exit();
    foreach($arr as $k => $v){
        if($v == null ){
            continue;
        }
        echo "$k : ";
        echo "<br>";
        $j = 1;
        foreach($v as $value){
            echo "学生$j";
            print_r($value);
            echo "<br>";
            $j++;
        }
        echo "<br>";
    }

// }
