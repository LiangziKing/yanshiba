<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 08:51:51
 * @version $Id$
 */

/** 函数
25: 函数的命名规范
		函数调用时,代码执行权进入函数,
		当函数所有语句执行完毕,函数结束,交回执行权,
		或者函数碰到return语句时,函数返回,交回执行权.
		
26: 函数的返回值
27: 函数的传值方式
28: 动态函数
29: 函数中变量的作用域
*/

function t() {
	echo 'world','<br />';
}
echo 'a <br />';
t();
echo 'b <br />';
function t2() {
	echo '1';
	echo '2';
	echo '3';
	return 'good';
	echo '4';
	echo '5';
	return 'study';
}

$res = t2();
echo $res;

function t3() {
	return 3 ; //return 'hello' , 'world'; 语句错 语法都通不过,return只能返回一个值

}

echo '<br />';





echo '<br />';



echo '<br />';


?>

