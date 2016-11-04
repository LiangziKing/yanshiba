<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 10:42:58
 * @version $Id$
 */

//顺序结构
//程序从上到下,顺序执行
echo '起床<br />';
echo '刷牙<br />';
echo '吃早饭<br />';
/*
选择
*/

$gender = '男';
if($gender == '男'){
	echo '哥们';
} else {
	echo '姐们';
}

echo '<p>------</p> ';

$heart = bad;
if($heart == 'good'){
	echo '烦恼';
} else {
	echo '开心';
}


echo '<p>------</p> ';

$rice = 1;
while($rice < 10) {
	echo '吃了',$rice,'份米饭没饱 <br />';
	$rice = $rice + 1;
}
echo '吃了',$rice,'份米饭,终于饱了!';

echo '<p>------</p> ';


?>