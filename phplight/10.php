<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 12:31:29
 * @version $Id$
 */


// print_r($_POST);
//fh是一个变量.为资源类型的变量
//php打卡文件
$fh = fopen('./msg.txt', 'a'); //打开文件

//往文件里写东西,沿着管子(资源)写
// fwrite($fh, 'from php into txt');

// //关闭资源
// fclose($fh);
// echo 'OK';


//开始留言
$str = $_POST['title'] . ',' . $_POST['content'] . "\n";
$fh - fopen('./msg.txt', 'a');
fwrite($fh, $str);
fclose($fh);

echo "ok";



?>