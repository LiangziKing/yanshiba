<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 21:06:06
 * @version $Id$
 */


/**
22 抽象类和抽象方法

*/

/*
* 参数:sql 语句
* 返回值类型:array
*/
abstract class aDB{
	/*
	* 参数:sql 语句
	* 返回值类型:array
	*/
	abstract public function getAll($sql); // 抽象方法没有方法体
	/*
	* 参数:sql 语句
	* 返回值类型:array
	*/
	abstract public function getRow($sql);
	public function a(){

	}
}

// new aDB();  // 抽象类不能被实例化

class Mysql extends $DB{
	public function getAll($sql){

	}
	public function getRow($sql){

	}
} 












?>