<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 17:53:28
 * @version $Id$
 */


/**
l1-12 类的继承



*/
class bb{
	function aa() {
		echo 11;
	}
	function hh() {
		echo 44;
	}
}

class cc extends bb {
	function aa (){
		echo 22;
	}
}


$dd = new cc();
$dd->aa();










?>