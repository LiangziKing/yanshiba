<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 18:01:26
 * @version $Id$
 */

/**
第40课 游标操作
*/
// current()
// next()
// prev()
// end()

// 取当前游标指向的数组单元的值
$arr = array('a' , 'b' , 'c');
echo current($arr) ,'<br>'; // a

next($arr); // 把数组的游标往后移
echo current($arr) ,'<br>'; // b

end($arr); // 把数组的游标移到最后
echo current($arr) ,'<br>'; // c

prev($arr); // 把数组的游标移到最后
echo current($arr) ,'<br>'; // b

reset($arr); // 游标复位
echo current($arr) ,'2<br>'; // a

while ($v = current($arr)) {
	echo current($arr),'<br>';
	next($arr);
}

//碰到这个情况,可以用数组游标的each函数来处理,自己搞定
$arr = array(1,2,3,false,4,5,6);
while ($v = current($arr)) {
	echo current($arr),'<br>';
	next($arr);
}

?>