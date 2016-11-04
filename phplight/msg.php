<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 12:56:52
 * @version $Id$
 */

$i = 1;
$fh = fopen('./msg.txt', 'r');

while ( ($row = fgetcsv($fh)) != false ){
	echo '<li><a href="readmsg.php?tid=' , $i , '">' , $row[0] , '</a></li>';

	$i++;
}



?>