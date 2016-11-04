<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 16:41:16
 * @version $Id$
 */

/**
38: 操作数组单元 

*/
$arr = array('a','b','c' );
// 增一个单元
$arr[] = 'd';
$arr[99] = 'e';
$arr['stu'] = array('li','wang');

print_r($arr);


echo '<br />';
// 读取单元值
echo $arr[3];
echo '<br />';
echo $arr['stu'][1];


echo '<br />';
// 改单元的值
$arr[0] = 'A';
print_r($arr);


echo '<br />';
// 删除某个单元
unset($arr[1]);
print_r($arr);



?>