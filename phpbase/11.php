<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 11:13:35
 * @version $Id$
 */

/** 日期时间函数
30: 格式化
	date()
	gmdate()

31: 解析检测日期
	mktiem()
	strtotime()
	checkdate()end

*/
$time = time();

echo date('Y-m-d H:i:s 星期N',$time),'<br />'; // 返回时间戳
echo date('Y-m-d H:i:s 星期N'),'<br />'; // 
echo date('Y-m-d h:i:s 星期N', 0),'<br />'; // 1970-01-01 08:00:00 星期4  格林格林威治之间,到东8区
echo gmdate('Y-m-d H:i:s 星期N', 0),'<br />'; 
echo '<br />';


echo '<br />';



?>