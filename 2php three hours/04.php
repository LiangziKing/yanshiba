<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");

echo '起床<br />';
echo '刷牙<br />';
echo '吃早饭<br />';

/**
 * 选择
 */

$gender = '男';

if ($gender = '男') {
	echo '哥们';
}

echo '<br />';
$heart = 'good';
if ($heart = 'good') {
	echo '烦恼';
} else {
	echo '开心';
}

echo '<br />';
$rice = 1;
while ($rice < 10) {
	echo '吃了',$rice,'份米饭,没饱<br />';
	$rice = $rice + 1;
}

echo '吃了',$rice,'份米饭,终于饱了!';