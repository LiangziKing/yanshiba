<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 11:13:35
 * @version $Id$
 */

/** 日期时间函数
29: 获取时间戳
	时间戳是指1970.01.01 00:00:00到现在这一瞬间经过的秒数;
	time()
	microtime()
30: 格式化
	date()
	gmdate()

31: 解析检测日期
	mktiem()
	strtotime()
	checkdate()end

*/
echo time(); // 返回时间戳
echo '<br />';
echo microtime();
echo '<br />';
print_r(microtime());
echo '<br />';
print_r(microtime(true));
echo '<br />';
$start = microtime(true);
for ($i=1; $i<10000 ; $i++) { 
	$smp = 1333/234;
}
$end = microtime(true);
echo $end - $start;
echo '<br />';


echo '<br />';



?>