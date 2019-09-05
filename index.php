<?php
   phpinfo();die();
   $arr = ['name'=>'poly','age'=>"22"];
   print_r(serialize($arr));
   $newarr  = serialize($arr);
   print_r(unserialize($newarr));
   echo  time()+86400;

