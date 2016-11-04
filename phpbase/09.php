<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 08:51:51
 * @version $Id$
 */


/** 函数
28: 动态调用函数
	可以用变量的值当做函数名,并调用函数

*/

function wel() {
	echo 'welcome';
}

function beat() {
	echo 'beat';
}

$heart = 'beat';

$heart(); // $heart的值是beat,因此调用执行beat();

echo '<br />';



echo '<br />';










?>	