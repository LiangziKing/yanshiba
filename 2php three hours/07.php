<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		
/**
 * 转义
 * 单引号中,只认识2个转义,\'=>',\\=>\
 * 而双引号中,认识的转义多一些,如\",\n,\t...等等,自己去手册查询
 */

$str = "hello \" \n word";
echo $str,'<br />';

echo "\n\n";
$str = 'hello \" \n \' \\ word';
echo $str,'<br />';

$str1 =  'hello';
$str2 = 'word';
$str = $str1.$str2;
echo $str,'<br/>';