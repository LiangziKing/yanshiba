<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 20:40:24
 * @version $Id$
 */


/**
20 魔术方法的意义

对于这个类来时,外部可以随意设置,添加,修改,删除,类本身

*/

class Wsz{
	public function __set($a,$b){
		echo '你想干啥,不能随便给我'.$a.'属性,再给我,我就爱上你了';
	}

}


$xy = new Wsz();
// 类本身失去了对内部属性的控制权
$xy->cy = 'jh';
echo $xy->cy;











?>