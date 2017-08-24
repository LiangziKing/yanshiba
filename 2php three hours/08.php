<?php
/**
 * @布尔教育 高端PHP培训
 * @培 训:http//www.itbool.com
 * @论 坛:http//www.zixue.it
 * @authors Liangzi King (1990818918@qq.com)
 */

header("Content-type:text/html;charset=utf-8");		
/**
 * 声明一个数组,就是造一组柜子
 */

$arr = array('001'=>'张三的衣服','002'=>'李四的内裤','003'=>'王五的袜子');
print_r($arr);

// 取数组的单元,凭数组名+key来取
echo '<br>',$arr['003'];