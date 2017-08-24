<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");	
$i = 1;	
while ($i <= 100) {
	echo $i,'<br />';
	$i++;
}

$i = 1;
while ($i <= 100) {
	if ($i%2==0) {
		echo $i,'<br />';
	}
	$i++;
}

$i = 1;	
while ($i <= 100) {
	if ($i%3==0 && $i%5==0) {
		echo abcde,'<br />';
	} elseif($i%3==0 ){
		echo fizz,'<br />';
	}
	elseif($i%5==0 ){
		echo buzz,'<br />';
	}else{
		echo $i,'<br />';
	}
	$i++;
}