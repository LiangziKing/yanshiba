<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 21:07:38
 * @version $Id$
 */

/** 
第49课 逻辑运算的短路特性与运算符优先级


*/

$house = false;
$car = ture;
 if($house && $car) { // 房子以为假,有用且计算,结果为假,程序不会去判断$car的值
 	echo '嫁<br>';
 } else {
 	echo '不嫁<br>';
 }

$b = 1;
if ($house && ($b = 6)) { // $b = 1  被短路,没有机会执行
	
}
echo $b,'<br>';

$b = 1;
if ($house || ($b = 6)) { // $b = 6  
	
}
echo $b,'<br>';


$b = 1;
if ($car || ($b = 6)) { // $b = 1  
	
}
echo $b,'<br>';

// 利用短路写出简短的判断代码
if (!defined('PI')) {
	define('PI' , 3.14);
}

defined('PI')||define('PI' , 3.14);


$a = 3;
$b = 5;
if ($a = 5 || $b = 7) { // $a = ture // 递增和递减对布尔值没有效果
	$a++;
	$b++;
}

echo $a . '  '. $b;  //1 6

?>