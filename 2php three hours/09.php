<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		


// 系统预定义的全局数组
// print_r($_GET);


/**
 * 读帖子信息
 */

echo '你想让我帮你输出第',$_GET['tid'],'号帖子的内容<br />';

print_r($_POST);