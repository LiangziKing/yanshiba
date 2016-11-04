<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 18:16:41
 * @version $Id$
 */


/**
13 final类和final方法


*/
//final类不能被继承

class bhc{
	//final方法不能被重写
	final public function xy(){
		echo 'hongniu';
	}

}


class classname extends bhc{
	public function ksf() {
		echo '123';
	}
	public function xy(){
		echo 'dongpeng';
	}
}

$cn =  new classname();
$cn->xy();







?>