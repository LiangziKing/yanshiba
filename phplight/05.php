<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 10:56:22
 * @version $Id$
 */

$i = 1;
while ($i < 101) {
	echo $i,'<br />';
	$i = $i + 1;
}

// $i = 1;
// while ($i < 101) {
// 	if($i % 2 ==0) {
// 		echo $i,'<br />';
// 	}
	
// 	$i = $i + 1;
// }


$i = 1;
while ($i < 101) {
	if($i % 3 ==0 && $i % 5 ==0) {
		echo 'abcde <br />';
	} else if ($i % 3 == 0) {
		echo 'Bizz <br />';
	} else if ($i % 5 == 0) {
		echo 'Fizz <br />';
	} else {
		echo $i,'<br />';
	}
	
	$i = $i + 1;
}

// $i = 0;
// while ($i < 101) {
// 	echo $i,'<br />';
// 	$i = $i + 2;
// }





?>