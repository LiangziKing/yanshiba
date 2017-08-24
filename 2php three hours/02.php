<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Conten-type:text/html;charset=utf");	
$age = 28;
echo $age,'<br/>'; //28

$age = 29;
$age = $age + 1;
echo $age, '<br/>';	//30

/**
变量名:$来开头标志,
变量名:可以由字母,数字,下划线_ 3者组成,而且不能用数字开头.
$3age;//错
$_ = 6;//正确
$*p = 30;//不可以
*/