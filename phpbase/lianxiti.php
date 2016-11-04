<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-26 15:59:06
 * @version $Id$
 */

/** 
练习题

*/

//用递归使数组内每个数值翻倍
$arr = array(1,2,'b',array(3,'c',array(4,5)));

function times2($arr) {
	foreach ($arr as $k => $v) {
		if (is_numeric($v)) {
			$arr[$k] = $v * 2;
		}
		
		if(is_array($v)) {
			$arr[$k] = times2($v);
		}
	}
	return $arr;
}

print_r(times2($arr));


//创建级连目录
$b = './a/b/c/e/f';

function mdir($path){
        if(file_exists($path)){
                echo 'exists';
                return;
        }
        if(!file_exists(dirname($path))){
                mdir(dirname($path));
                mkdir(dirname($path));
        }
        mkdir($path);

}

mdir($b);


//分类
$area = array(
   array('id'=>1 ,'area'=>'北京','pid'=>0),
   array('id'=>2 ,'area'=>'广西','pid'=>0),
   array('id'=>3 ,'area'=>'桂林','pid'=>2),
   array('id'=>4 ,'area'=>'阳朔','pid'=>3),
   array('id'=>5 ,'area'=>'丰台','pid'=>1),
   array('id'=>6 ,'area'=>'方庄','pid'=>5),
   array('id'=>7 ,'area'=>'朝阳','pid'=>1),
   array('id'=>8 ,'area'=>'十里河','pid'=>7),
   array('id'=>9 ,'area'=>'老君堂','pid'=>8),
);

function so($arr,$id,$deep=1){
        static $list = array();
        foreach($arr as $k=>$v){
                if($v['pid'] == $id){
                        echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$deep) . $arr[$k]['area'] . '<br />';
                        $list[] = $v;
                        so($arr,$v['id'],$deep+1);
                }
        }
        return $list;
}

so($area,0);
so($area,1);
so($area,2);
so($area,3);






?>