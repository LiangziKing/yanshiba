<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 16:53:16
 * @version $Id$
 */

/**
39: 循环数组
*/
// for循环,对于0..1..2...递增的索引数组
$arr = array('a','b','c','d','e' );
for ($key=0; $key <count($arr) ; $key++) { 
	echo $arr[$key],'<br />';
}

$arr = array('age' =>28 ,'height'=>180,'name'=>'lisi' );
foreach ($arr as $key => $value) {
	// echo $arr[$key],'<br />';
	echo $key ,'~',$value,'<br />';

}

foreach ($arr as $v) {
	echo $v , '<br />';
}

// 把下面这个数组的每个单元值变为原来的2倍
$stu = array('lisi' => 3,'wang' =>5,'zhao'=>6);
print_r($stu);

foreach ($stu as $k => $v) {
	$stu[$k] = $v * 2;
}
echo '<br />';
print_r($stu);


?>