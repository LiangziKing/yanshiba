<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 12:56:52
 * @version $Id$
 */

$tid = $_GET['tid'];

//echo '你想看第' , $tid , '行留言!'

//打开得到文件
$fh = fopen('./msg.txt', 'r');
/*print_r(fgetcsv($fh));
print_r(fgetcsv($fh));
var_dump(fgetcsv($fh));*/

$i = 1;
while ( ($row = fgetcsv($fh)) != false ){
	// print_r($row);
	if ($tid == $i) {
			// print_r($row);
		echo '<h1>' , $row[0] , '</h1>';
		echo '<p>' , $row[1] , '</p>';
		}
	$i++;
}



?>