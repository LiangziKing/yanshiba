<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 18:45:23
 * @version $Id$
 */

/** 
第43课 超级全局变量
$_GET // 地址栏上获得的值
$_POST // POST表单发送的数据
$_REQUEST // 集邮GET,也有POST的内容

$_SEESION
$_COOKIE
$_FILES

$_ENV // 服务器操系统的环境变量,如操作系统类型,linux,win,mac,环境变量等等
$_SERVER // 
$GLOBALS


*/

print_r($_GET);
print_r($_POST);
print_r($_REQUEST);


print_r($_ENV); // 容易暴露服务器信息,一般不允许显示.
// 搜索如果禁用了$_ENV变量,还有什么方法获取环境变量信息?
echo '<hr>';
print_r($_SERVER); // 获取网站的域名,以及当前访问的脚本,客户的IP(REMOTE_ADDR,HTTP_X_FORWARD_FOR)


//$GLOBALS 是对全局变量花名册的一个别名,通过该变量,可以任意访问全局变量
$a = 3;
$b = 4;
function t() {
	print_r($GLOBALS);
	$GLOBALS['a'] = 99;
}

t();
echo $a; // 99

?>