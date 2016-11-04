<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-15 11:40:07
 * @version $Id$
 */

//声明一个数组,就是造一组柜子
$arr = array('001'=>'张三放的衣服' , '002'=>'李四放的内裤' , '003'=>'王武的袜子' );
// echo $arr,'<br />';
print_r($arr);

//取数组的单元,凭数组名+key来取
echo "<br />",$arr['003'],'<br />';
var_dump($arr);
echo "<p>---------------------------</p>";


?>