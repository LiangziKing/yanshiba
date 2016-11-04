<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 20:47:29
 * @version $Id$
 */


/**

21 自动加载




*/


function Myload($lass){
	// echo $lass;
	include './'.$lass.'.class.php';
}

// 注册一个函数为自动触发函数
spl_autoload_register('Myload');  // new一个不存在的类 你来找我

new Mysql('qq');











?>