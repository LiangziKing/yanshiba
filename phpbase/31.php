<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-25 09:17:27
 * @version $Id$
 */

/** 
第51课 递归
递归的概念
递归技巧与案例
递归与静态变量

*/

function sum($n) {
	if($n == 1 ) {
		return 1;
	}
	return $n + sum($n - 1);
}

echo sum(100);


?>