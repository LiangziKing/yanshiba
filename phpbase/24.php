<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 19:23:00
 * @version $Id$
 */

/** 
第44课 常量
		意义:声明后值不能修改.
		声明:define
		特点:声明后值不能修改,也不能销毁.
		检测
		案例

*/

define('PI' , 3.14);
echo PI,'<br>'; // 常量名字前不用加$
// 命名规范
// 和变量一样,只不过习惯上全大写.
// PI = 3.15;
// echo PI,'<br>';

function t() {
	echo PI,'<br>';
}

t();

define('PI', 3.15);
echo PI,'<br>';
// unset(PI);
// 声明常量后,该常量在页面的任意位置都可以访问
// 检测常量
if(defined('PI')) {
	echo '常量已存在<br>';
} else {
	echo '常量不存在<br>';
}
// 真实开发一般这样
 if (!defined('HEI')) {
 	define('HEI',8846);
 }
echo HEI,'<br>';

// 动态常量名,用变量的值做常量的名字,该如何做?
$chang = 'HEI';
echo $chang,'<br>';

echo constant('HEI'),'<br>';
echo constant($chang),'<br>';




?>