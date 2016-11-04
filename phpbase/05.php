<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 08:51:51
 * @version $Id$
 */

/** 函数
23: 函数的概念
24: 函数的定义格式
25: 函数的命名规范
26: 函数的返回值
27: 函数的传值方式
28: 动态函数
29: 函数中变量的作用域
*/

//一段封装好的代码,可以随时调用
function t1() {
	echo 'hello';
	echo 'world';
	echo '!<br />';
}

t1();
t1();

function he($a,$b) {
	$c = $a + $b;
	echo $c;
}
he(3,7);


echo '<br />';
//返回值
function h2($a,$b) {
	$c = $a + $b;
	return $c;
}

$d = h2(4,5);
echo $d;


echo '<br />';
//===24课 函数的定义格式===//
/***
function 函数名([参数1,参数2...N]) {
	// 执行语句
	// return;
}

命名规范:对于函数,命名规则he变量是一样的,但是函数不区分大小写.

*/
echo H2(5,6);



?>

