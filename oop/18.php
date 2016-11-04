<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 20:08:51
 * @version $Id$
 */


/**
18 self与parent 1





*/

class Ad{
	public $rand;
	static public $ob = null;
	//加上final，不允许被子类重写
	final protected function __construct(){
		$this->rand = mt_rand(100000,99999999);
	}

	static public function getins(){
		if((self::$ob == null) || (!self::$ob)) {
			self::$ob = new self();
		}
		return self::$ob;
	}
}


var_dump(Ad::getins());
var_dump(Ad::getins());











?>