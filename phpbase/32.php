<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-26 10:37:41
 * @version $Id$
 */

/** 
第52课 递归技巧与案例
假设法--假设自己的函数已完成

用递归打印当前目录下的文件,目录及子目录...


*/
function printdir($path,$lev) {
	$dh = opendir($path);
	while (($row = readdir($dh)) !== false) {
		echo str_repeat('|-',$lev),$row ,'<br>';

		if($row == '.' || $row == '..') {
			continue;
		}

		if(is_dir($path.'/'.$row)) {
			printdir($path.'/'.$row,$lev+1) ;
		}
	}

	closedir($dh);
}

$path = '.';
printdir($path);


?>