<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 08:51:51
 * @version $Id$
 */

/** 函数
26: 函数的传值方式

*/

function t($a) {
	$a = $a + 1;
}

$b = 3;

t($b); //传参$b,相当于$b的值,赋给$a,而$a是函数内部的值,怎么变化,和外界无关.

echo $b,'<br />';





function t2(&$a) {
	$a += 1;
}

$b = 5;
t2($b);
echo $b; //$a 和 $b 指向了同一个地址.
// 这种传参方式是不推荐使用的,应为函数内部的语句,影响到了外部的变量,破坏了函数的封装性.

echo '<br />';





echo '<br />';



echo '<br />';







?>