<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 19:22:26
 * @version $Id$
 */


/**
15 静态属性和静态方法



*/
class Math{
	static public $name = 'lisi';

	static public function add($a,$b){
		return $a+$b;
	}
}

// 加上static后,不用用实例化就可以直接调用属性和方法
// $math = new Math();
echo Math::add(2,3),'<br>';

echo Math::$name,'<br>';










?>