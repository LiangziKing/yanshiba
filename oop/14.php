<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 19:05:28
 * @version $Id$
 */


/**
3种权限详解


*/

class Human{
	public $money = 3000;
	protected $che = 'bmw';
	private $mv = 'kt';
	public function t1(){
		// 内部可以调用
		echo $this->money;
	}

	public function t3(){
		// 内部可以调用
		echo $this->che;
	}
	public function t5(){
		echo $this->mv;
	}

}

class Stu extends Human{
	public function t2(){
		// 子类中可以调用
		echo $this->money;
	}
	public function t4(){
		// 子类中可以调用
		echo $this->che;
	}
	public function t6(){
		// 子类中可以调用
		echo $this->mv;
	}

}


$stu = new Stu();
// 外部可以调用
// echo $stu->money;
// $stu->t1();
// $stu->t2();

// 外部不能调用
//$stu->che;
// $stu->t3();
// $stu->t4();
// 外部不可以调用
// $stu->mv();
// $stu->t5();
$stu->t6();





?>