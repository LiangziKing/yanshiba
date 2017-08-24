<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");	
$zhang = 180;
$lisi = 175;

echo 'zhang is taller than lisi ', $zhang - $lisi,'<br />';

$zhang = 50;
$lisi = 40;
echo $zhang  + $lisi,'<br />';

// 取模,求余数
echo 20%7,'<br />';

if(3 > 2){
	echo '3果然大于2';
} else{
	echo '3不大于2';
}

echo '<br />';
$score = 60;
if($scroe>=60){
	echo '及格了';
} else{
	echo '不及格';
}

echo '<br />';

$li = 'tianjin';
$wang = 'jiangsu';
if($li == $wang){
	echo '老乡';
} else{
	echo'都是中华儿女';
}