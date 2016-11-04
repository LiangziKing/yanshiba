<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 10:59:01
 * @version $Id$
 */

/** 



*/
class Ren {
	public $name = '曹禺';
	public $zuopin = '雷雨';
	public function pai() {
		// $this //伪变量
		echo $this->name.'拍电影<br>';
	}
}


// $this 谁实例化对象就是谁
$ren = new Ren();

// 调用对象中的方法
$ren->pai();


$hao = new Ren();

$hao->name = '张艺谋';
$hao->pai();


?>