<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 09:12:01
 * @version $Id$
 */

/** 
第2课 面向对象


*/
//函数

// function fly() {
// 	echo '起来';
// }
// fly();


//面向对象
class fei {
	public $name = 'zhaosi'; // 类中的属性

	public function fly() {  // 类方法 public 不写默认为public 建议写上
		echo '起来';
	}
}

$ff = new fei();
// 调用类中的属性
// 调用对象中的属性
echo $ff->name;
// 调用类中的方法
// 调用对象中的方法
$ff->fly(); 

echo '<br><hr>';

class Stu {
	//属性名 调用时不加 $
	public $sn = '0001';
	public $name = 'lisi';
	// 方法名
	function ks() {
		echo '我叫lisi,我来考试';
	}
}
// 类名,不区分大小写,但是我们的编程过程中,你要认为是区分大小写
$s = new Stu();
echo $s-sn,'<br>';
$s->ks();


?>