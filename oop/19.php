<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 20:23:09
 * @version $Id$
 */


/**
19 魔术方法



*/


class Zhaosi {
	// 访问获取不可见属性时,被触发(调用)
	public function __get($a){
		echo $a;
	}

	// 设置不可见属性时触发
	public function __set($b,$c) {
		echo $c.'.........'.$b,'<br>';
	}

	public function __isset($f){
		echo $f;
	}


	public function __unset($h){
		echo $h;
	}
}

$aqgy = new Zhaosi();

// // $aqgy->meijia;
// $aqgy->fbb = '黄飞鸿';
// $aqgy->dx = '谢娜';

// isset($aqgy->zhangfei);
unset($aqgy->panjinlian);









?>