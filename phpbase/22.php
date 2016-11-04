<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 18:28:51
 * @version $Id$
 */

/** 
第42课 数组案例及面试题



*/

$arr = array('a','b','c','d');
// $arr[] = 'e';
echo array_push($arr,'e'),'<br>'; // 往数组尾部加入单元,并返回操作后的数组长度

echo array_pop($arr) ,'<br>'; // e 弹出尾部单元
echo array_pop($arr) ,'<br>'; // d

array_unshift($arr,'z');
print_r($arr);

array_shift($arr); //  弹出头部单元
print_r($arr);

echo '<hr>';

$yang = array(1 , 0 , 0 , 0 , 0 );
for($i=1;$i<=20;$i++) {
	$tmp = $yang[1] + $yang[3];
	array_unshift($yang, $tmp);
	array_pop($yang);
}
print_r($yang);
echo array_sum($yang);



?>