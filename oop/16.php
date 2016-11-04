<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 19:30:38
 * @version $Id$
 */


/**
16 类常量



*/
// 普通常量
define('PI', 3.14159265879);

class Math{
	// define('PI', 3.14159265879);
	// const PI = 3.1415926; // 类常量
	public function test(){
		echo PI;
		// echo Math::PI;
	}
}

$m = new Math();
$m->test();










?>