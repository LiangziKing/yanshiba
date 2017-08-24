<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		

$fh = fopen('./msg.txt', 'r');

$i = 1;

while (($row = fgetcsv($fh)) != false) {
	// print_r($row);
	echo '<li><a href="readmsg.php?tid=',$i,'">', $row['0'],'</a></li>';
	$i++;
}
