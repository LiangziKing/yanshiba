<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		
$tid = $_GET['tid'];
// echo '你是想看第',$tid,'行留言';

// 打开得到文件
$fh = fopen('./msg.txt', 'r');


$i = 1;
while (($row = fgetcsv($fh)) != false) {
	// print_r($row);
	if ($tid == $i) {
		// print_r($row);
		echo '<h1>' , $row[0] , '</h1>';
		echo '<p>' , $row[1] , '</p>';
	}

	$i++;
}
