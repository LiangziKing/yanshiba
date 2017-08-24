<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		
// print_r($_POST);

/**
 * POST发送数据,PHP处理 输出结果
 * GET传递数据,PHP处理 输出结果
 */

// PHP打开文件
/**
 * fh是一个变量,为资源类型的变量
 */
// $fh = fopen('./msg.txt', 'a');//打开文件

//往文件写东西,沿着管子(资源)写,
// fwrite($fh, 'from php into txt string');

//关闭资源
// fclose($fh);

// echo 'ok';

$str = $_POST['title'].','.$_POST['content']."\n";
$fh = fopen('./msg.txt','a');
fwrite($fh,$str);
fclose($fh);
echo 'ok';