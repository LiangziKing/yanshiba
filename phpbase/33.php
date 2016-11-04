<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-26 15:00:58
 * @version $Id$
 */

/** 
第53课 递归与静态变量
static变量有一个特点----在第1次函数调用声明之后存在,且不随函数结束而结束
当函数再次调用时,可以直接利用上次的结果.

*/
function t() {
	//$a = 10;
	static $a = 10;
	$a += 1;
	return $a;
}

echo t(),'<br>'; // 
echo t(),'<br>'; // 
echo t(),'<br>'; // 


// 写递归函数,计算所有单元的和
$arr = array(1,2,3,array(4,array(5,6)) );
function sum($arr) {
	static $sum = 0;
	foreach ($arr as $v) {
		if(is_array($v)) {
			sum($v);
		} else {
			$sum += $v;
		}
		
	}
	// echo $sum,'<br>';
	return $sum;
}

echo sum($arr);


?>