<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 14:30:44
 * @version $Id$
 */
/***
============PHP基础巩固课程============
变量:
1:整型
	整型,浮点型,字符串,布尔,数组,对象,NULL,资源

2:变量检测
	isset可以检测变量是否存在,
	注意:对于NULL,isset也返回false

3:类型检测
	gettype()获取变量类型

4:打印
	echo 字符串
	print_r 数组
	var_dump 打印变量的类型及其值

5:类型转换
	PHP中,变量的类型是可以随时转变的,非常灵活
	最常见的是字不错与数字的转换,
	或是数字/字符串  -->布尔值的转化
	
6:赋值
	传值赋值 引用赋值

7:销毁
	动态变量名
	常见面试题

*/

// NULL是指没有值,也没有类型

$a = null;

// 变量的检测
if (isset($b)) {
	echo '变量b存在';
} else {
	echo '变量b不存在';
}

echo "<br />";

if (isset($a)) {
	echo '变量a存在';
} else {
	echo '变量a不存在';
}

echo "<br />";
$c = '';
if (isset($c)) {
	echo '变量c存在';
} else {
	echo '变量c不存在';
}


// 获取变量类型
echo "<br />";
$a = 1.01;
echo gettype($a);


// 判断是否是我们想要的类型
// is_int,is_float,is_array,isbool...


echo "<br />";

$a = 23;
if(is_int($a)){
	echo "a是整型";
} else {
	echo "a不是整型";
}

// 变量打印
echo "<br />";

$a = '1';
$b = array(1,2,'3');
echo $a,'<br />';
print_r($b);
var_dump($b);


// 字符串到数字的转换,从左到右碰到不合法的数字,截取出来的部分转成数字
echo "<br />";
$a = '12.5hello99';
$a = $a + 3;
var_dump($a);

echo "<br />";
$a = 123;
$a = $a . 'hello';
echo $a;


echo "<br />";

// 到布尔型的判断,以下值,都被当成布尔值的假,而其他值,都被当成布尔值的真
// '','0',0,0.0,false,NULL,array()

if ('' == false) {
	echo "空字符串果然假<br/>";
}
if ('0' == false) {
	echo "0字符串果然假<br/>";
}
if (0.0 == false) {
	echo "0.0字符串果然假<br/>";
}

//变量赋值之传值赋值


echo "<br />";
$li = 29;
$wang = 23;
$wang = $li;

var_dump($li,$wang);
echo "<br />";
$wang = 'w';
var_dump($li,$wang);

//变量赋值之引用赋值

echo "<br />";
$li = 29;
$wang = 23;
$wang = &$li;
var_dump($li,$wang); //29,29
echo "<br />";
$wang = 'w';
var_dump($li,$wang); // w,w

//销毁 unset
echo "<br />";

// $a = 99;
unset($a);
if (isset($a)) {
	echo 'a存在';
} else {
	echo "a不存在";
}

echo "<br />";
$li = 29;


//动态变量名
$liubei = '河北人';



?>