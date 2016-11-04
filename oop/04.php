<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 09:53:26
 * @version $Id$
 */

/** 



*/
// 类名 区分大小写
class Ren{
	// 属性的声明
	public $name = 'liuneng'; // 赋值不赋值都可以;

	// 方法的声明
	// function
	public function man() {
		echo '66666';
	}

}

// 实例化是,不区分大小写; 用大驼峰法命名
// 但是要人为的区分大小写
$r = new ren();
// 调用属性
echo $r->name;

$r->man();
?>