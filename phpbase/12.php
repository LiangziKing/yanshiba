<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-17 11:13:35
 * @version $Id$
 */

/** 日期时间函数
31: 解析检测日期
	mktime()
	strtotime()
	checkdate()end

*/
echo mktime(14.35,20,11,27,2016);
echo '<br />';
echo strtotime('now'),'<br />';
echo strtotime('now + 1 day'),'<br />';
echo strtotime('now - 1 day'),'<br />';
// 检测日期是否合法 3月35日
var_dump(checkdate(2,29,2000),'<br />');
var_dump(checkdate(2,29,1900),'<br />');
echo '<br />';


echo '<br />';



?>