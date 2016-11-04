<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 10:29:44
 * @version $Id$
 */

/** 



*/

class Stu {
	// public $name = mt_rand(111,6666);
	// public $name = 1+3;
	// public $name = 0 || 2;
	// public $name = ['a'=>['b'=>'33']];
	public $name = array(
		'a'=>array('b'=>33),
		);
}

$stu = new Stu();
//echo $stu->name;
var_dump($stu->name);
?>