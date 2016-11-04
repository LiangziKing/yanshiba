<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 18:15:25
 * @version $Id$
 */

/** 
第41课 数组常用函数及面试题


*/

$arr = array('a'=>'张龙' , 'b'=>'赵虎' , 'c'=>NULL);
if (isset($arr['a'])) {
	echo 'a号单元存在','<br>';
} else {
	echo 'a号单不元存在','<br>';
}

if (array_key_exists('c', $arr)) {
	echo 'c号单元存在','<br>';
} else {
	echo 'c号单不元存在','<br>';
}

if (in_array('赵虎', $arr)) {
	echo '有赵虎','<br>';
} else {
	echo '没有赵虎','<br>';
}



?>