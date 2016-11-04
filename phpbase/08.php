<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 08:51:51
 * @version $Id$
 */
//报告所有错误
error_reporting(E_ALL);

/** 函数
27: 函数中变量的作用域
		在PHP的页面中声明的变量,叫全局变量
		函数内部变量,叫局部变量.

*/

$a = 22;
function t() {
	$b =99;
	echo $a;
}

t();
echo $b;


// 声明全局变量 global
function t2() {
	global $a;
	echo $a;
}

t2();

echo '<br />';
// 超级全局变量,在页面的任何部分,包括函数,方法等,都可以直接访问
function t3() {
	print_r($_GET);

}

t3();




echo '<br />';



echo '<br />';










?>	