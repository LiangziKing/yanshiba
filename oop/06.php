<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 10:48:57
 * @version $Id$
 */

/** 



*/

class A {
	public $name = 'xieguangkun';
	public $age = '50';
	public function kaiche() {
		echo '开车撞刘能';
	}
}

// new类名 一个对象在内存中产生
$a = new A();  
echo $a->name,'<br>';

$b = new A();
$b->name = 'xiedajiao';
echo $b->name,'<br>';

$b->kaiche();

echo $a->name;

?>