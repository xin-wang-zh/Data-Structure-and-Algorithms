<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>插入排序</title>
</head>
<body>
    <?php

        //排队，一个人，一碰到比自己大的就p
        $arr = [5,4,3,1,6,6];
        function insertSort($arr){
            $len = count($arr);
            if($len <=1) return;
            for($i=1;$i<$len;$i++){ //从第二个人开始
                
                 $value = $arr[$i]; //出列，空出位置，内存占一个位
                 for($k=0;$k<$i;$k++){
                     if($arr[$k]>$value){
                         for($i;$i>$k;$i--){
                             $arr[$i]=$arr[$i-1];
                         }
                         $arr[$k] = $value;
                     }
                 }


                /* $j = $i-1;//先比较前一个人，
                for($j;$j>=0;--$j){
                    
                    if($arr[$j]>$value){ //前一个人比他高，
                        $arr[$j+1]=$arr[$j]; // 前一个人往后退一位，位置空出来
                    }else{   //前一个人没他高，
                        break; //没用比了
                    }
                } */
                //$arr[$j+1]=$value; //最后空出来，归列
            }
            return $arr;
        }
        
        $sortArr = insertSort($arr);
        var_dump($sortArr);
    ?>
</body>
</html>