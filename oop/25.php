<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 21:46:43
 * @version $Id$
 */


/**
25 异常的处理





*/

function t1(){
	if (rand(1,10) > 5) {
		throw new Exception("t1()", 1);
		
	} else {
		return t2();
	}
}

function t2(){
	if (rand(1,10) > 5) {
		throw new Exception("t2()", 2);
	} else {
		return t3();
	}
}


function t3(){
	if (rand(1,10) > 5) {
		throw new Exception("t3()", 3);
	} else {
		return true;
	}
}

try{
	var_dump(t1());
} catch(Exception $e) {
	// var_dump($e);
	echo '文件'.$e->getFile();
	echo '行号'.$e->getLine();
}










?>