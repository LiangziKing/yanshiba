<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 14:24:10
 * @version $Id$
 */

/** 
构造方法


*/
class Human {
	// 类,一旦被实例化,机会被调用
	public function __construct($b,$c) {
		echo 'aaa<br>',$b,$c;
	}


	public function cc() {
		echo 11,'<br>';
	}

	public function ff() {
		$this->cc();
	}

	// 析构方法,对象销毁时被调用
	public function __destruct() {
		echo 'bbb<br>';
	}
}

$a = new Human('jianshiba','zhenhao');
$a->cc();
$a->ff();



?>