<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 19:39:12
 * @version $Id$
 */

/** 
第45课 文件包含
文件包含的作用在于代码的重用.
我们可以把重用的代码段写一个文件里,
当需要这些代码时,引入这个文件就可以了.


include include_once
require require_once

_once作用:只引用1次,如果之前已引用过,不在重复引用.
注意:不加_once速度快一些.


include require的区别
如果引入文件不存在,include尽量往下执行,报Warning
require则直接报fatal error,脚本立即停止执行

*/


include('./25-sub.php'); // 相当于把25-sub.php的文件内容替换本行
// include('./25-sub2.php'); 
// include('./25-sub2.php'); 
// include('./25-sub2.php'); 
// include('./25-sub2.php'); 

include_once('./25-sub2.php'); 
include_once('./25-sub2.php'); 
include_once('./25-sub2.php'); 

inclued('25sub3.php');
require('25sub3.php');
t();

echo $age;




?>