<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 20:42:42
 * @version $Id$
 */

/** 
第47课 位运算与PHP的错误报告设置

PHP脚本的错误,分多个等级,致命错误,Notice,Warning,N多级
如何方便的设置报错级别?

PHP把不同等级的级别,用数字来表示,比如
1
2
4
8
16
...
0000 0001
0000 0010
0000 0100
...
1111 1111
综上,想报告所有错误,可以把所有错误界别 a | b | c ...E_ALL 30719
*/
// 设置报告所有错误
// error_reporting(E_ALL);
// error_reporting(0);
echo $a;
include('a.php');

// 想报所有错误,除了Notice的错误
// error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);
echo $a;

// var_dump(E_NOTICE);
?>