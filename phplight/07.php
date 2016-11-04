<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 11:26:34
 * @version $Id$
 */

/**
转义字符
在单引号中,只认识2个转义, \' => ', \\ => \
而双引号中,认识的转义多一些,如\",\n(换行),"\t"(tab制表符)..等等,自己去手册查询
*/
$str = "hello \' \n word";
echo $str,'<br />';
echo "\n\n";

$str = 'hello \" \\ \' \n word';
echo $str;
echo "<p>---------------------------</p>";


$str1 = 'hello';
$str2 = 'word';

$str = $str1 .' '. $str2;
echo $str,"<br />";


?>