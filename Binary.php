<?php

//二分算法 
//数据必须为有序数组
//PHP数据下标为小数，则取整数部分的值


function Binary($array,$high,$low,$value)
{
    if($low >$high) echo  -1;
    $mid = ($high + $low)/2;
    if($array[$mid] == $value){
        return  $mid;
    }elseif($array[$mid] < $value){
        return Binary($array,$high,$mid+1,$value);
    }else{
        return Binary($array,$mid-1,$low,$value);
    }
}
