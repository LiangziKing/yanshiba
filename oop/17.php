<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 19:37:14
 * @version $Id$
 */


/**
17 单例模式
一个类只能new一个


*/
// // 1.普通类的实例化,得到两个对象
// class Single{
// 	public $rand;
// 	public function __construct(){
// 		$this->rand = mt_rand(100000,99999999);
// 	}
// }

// var_dump(new Single());
// var_dump(new Single());



// // 2.受保护的构造方法,
// class Single{
// 	public $rand;
// 	protected function __construct(){
// 		$this->rand = mt_rand(100000,99999999);
// 	}
// }

// var_dump(new Single());
// var_dump(new Single());


// // 3.4.转移控制权,设为静态
// class Single{
// 	public $rand;
// 	protected function __construct(){
// 		$this->rand = mt_rand(100000,99999999);
// 	}

// 	// public function getins(){
// 	static public function getins(){
// 		return new Single();
// 	}
// }

// // 想要用getins就要实例化,只要实例化就会调用构造函数/方法,报错---> 静态
// var_dump(Single::getins());
// var_dump(Single::getins());
// // var_dump(new Single());



// 5.添加判断
class Single{
	public $rand;
	static public $ob = null;
	//加上final，不允许被子类重写
	final protected function __construct(){
		$this->rand = mt_rand(100000,99999999);
	}

	static public function getins(){
		if((Single::$ob == null) || (!Single::$ob)) {
			Single::$ob = new Single();
		}
		return Single::$ob;
	}
}


class Test extends Single{
	public function __construct(){
		var_dump(rand(100000,3000000));
	}
}

new Test();
new Test();

// 想要用getins就要实例化,只要实例化就会调用构造函数/方法,报错---> 静态
// var_dump(Single::getins());
// var_dump(Single::getins());






?>