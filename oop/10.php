<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 14:54:27
 * @version $Id$
 */

/**
*10 类的封装
*/

class Atm {
	protected function getPwd() {
		return '123123';
	}

	public function checkpwd($pwd) {
		return $this->getPwd() == $pwd;
	}
}

$atm = new Atm();
if ($atm->checkpwd('1231234')) {
	echo 1;
} else {
	echo 'nisha';
}


?>