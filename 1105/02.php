<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-11-03 11:05:42
 * @version $Id$
 */

/** 
张三是一位普通人,别人早晨向他打招呼,他会说"早上好",但有一天他被车撞了,脑子受了一些伤,因此,别人早晨向他打招呼时,他有时会说"早上好",但有时会说"晚上好",甚至辱骂对方.

张三
张三的智商
张三打招呼

车
车撞人

以往我们分析:
收到什么数据
做什么判断
各自再怎么处理

我们把张三看成一个对象
张三有智商---> 属性[名字]
张三打招呼---> 功能/方法[动词]

车也是一个对象
车能撞人---> 功能/方法[动词]


*/

class Man {
	public $iq = 100;
	public function say() {
		$arr = array('早上好','晚上好','你妹呀');

		if ($this->iq >= 100) {
			echo '早上好';
		} else {
			$i = rand(0,2);
			echo $arr[$i];
		}
	}
}

class Car {
	public 	function hit($people) {
		$newiq = rand(50,110);
		$people->iq = $newiq;
	}
}

$lisi = new Man();
$QQ = new Car();

$lisi->say();echo '<br>';

// 撞击
$QQ->hit($lisi);

echo $lisi->iq; echo '<br>';
$lisi->say();echo '<br>';
$lisi->say();echo '<br>';
$lisi->say();echo '<br>';


/**
 * 这一道题的目的-----是让大家换个思维,换个面向对象的思维来看待问题.
 * 至于此题里面的语法,你不懂,没关系.
 */


?>