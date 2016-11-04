<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 14:44:01
 * @version $Id$
 */

/** 字符串
32课: 字符串的定义方式
33课: 单双引号对比 转义 解析 速度
34课: 常用函数

*/
// $str1 = 'hello';
// $str2 = "hello";

// echo $str1,'<br />',$str2,'<br />';
// heredoc nowdoc 定义大段文本
//heredoc
$age = 29;
$str5 = <<<INTRO
李明今年 $age 岁';
"李明今年 $age 岁";

INTRO;

// echo $str3,'<br />';
// echo $str4,'<br />';
echo $str5,'<br />';


$str4 = <<<'INTRO'
李明今年 $age 岁';
"李明今年 $age 岁";
INTRO;

echo $str4;
?>