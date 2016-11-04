<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 15:30:38
 * @version $Id$
 */

/**
====34课 字符串常用函数====
*/
$str1 = 'hello';
echo strlen($str1) , '<br />';

$str2 = '中国';
echo strlen($str2) , '<br />'; //utf-8编码,中文占3个字节

echo mb_strlen($str2,'utf-8'),'<br />';

// strpos

$str = 'abcde';
$char = 'a';
if(strpos($str,$char) !== false) {
	echo '含有', $char ,'<br/>';
} else {
	echo '不含有', $char ,'<br/>';
}


// 替换字符串
$str = 'hi, fuck';
echo str_replace('fuck','**',$str),'<br />';

// 替换一批字符串
$str = '男人,女人,男孩,女孩';
//echo str_replace('男','女',$str),'<br />'; //女人,女人,女孩,女孩
echo strtr($str,array('男'=>'女','女'=>'男')),'<br />';

// 截取子字符串
$str = 'tommrow is another day';
echo substr($str, 0 , 3 ),'<br />';  // 0开始,截3个字节
echo substr($str, 3 , -3 ),'<br />'; // 第3个参数如为负,代表结束负责,往前数.
echo substr($str, -10 , -3 ),'<br />';

// 拆分字符串
$str = 'tech,linux,mysql';
print_r(explode(',', $str));
$arr = explode(',', $str);
// print_r($arr);

echo (implode($arr,','));


?>