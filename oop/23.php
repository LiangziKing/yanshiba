<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 21:20:43
 * @version $Id$
 */


/**
23 接口的概念
可以理解为类的模板

*/


interface flyer{
	public function fly($oil,$height);
}

interface runer{
	public function run($ci,$d);
}

interface water {
	public function wate($f);
}

class Super implements flyer,runer,water{
	public function fly($oil,$height){
		echo '我能飞';
	}

	public function run($ci,$d){
		echo '你飞啊....';
	}

	public function wate($f){
		echo '我能漂';
	}
}

$a = new Super();
$a->fly('a','b');
$a->wate('a');
$a->run('a','b');









?>