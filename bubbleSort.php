<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>冒泡算法</title>
</head>
<body>
<?
function bubbleSort($arr ){
    //从小到大排序，每次对比相邻两个，大的往前移，最少需要对比n-1次;
    $len = count($arr);
    if($len<=1) return;
    //控制比较轮数
    for($i=1;$i<$len;$i++){
        $ifchange = false;
        //控制每轮需要比较的次数，每轮比较后-1；
        for($k=0;$k<$len-$i;$k++){
            foreach($arr as $key=>$val){
                if($arr[$k]>$arr[$k+1]){
                    $temp  = $arr[$k+1];
                    $arr[$k+1] = $arr[$k];
                    $arr[$k] = $temp;
                    $ifchange = true;
                }
            }
        }
        if(!$ifchange) break;//没有交换提前终止
    }
    return $arr;
}
    
$arr = array(4,5,51,12,53,3,13,87);
var_dump(bubbleSort($arr));
?>
</body>
</html>