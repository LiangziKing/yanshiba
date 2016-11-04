<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 11:33:54
 * @version $Id$
 */

/** 

封装mysql类


*/

class MySQL {
	public $link;

	public function __construct() {
		$this->conn();
	}



	// 链接数据库
	public function conn() {
		$cfg = array(
			'host'=>'localhost',
			'user'=>'root',
			'password'=>'root',
			'db'=>'test',
			'charset'=>'utf8'
			);

		// 链接数据库(地址,用户名,密码,选库)
		// $conn = mysqli_connect($cfg['host'],$cfg['user'],$cfg['password'],$cfg['db']);
		$this->link = mysqli_connect($cfg['host'],$cfg['user'],$cfg['password'],$cfg['db']);
		$sql = 'set names '.$cfg['charset'];
		mysqli_query($this->link,$sql);

		// var_dump($conn);
	}

	// 发送查询
	public function query($sql) {
		return mysqli_query($this->link,$sql);
	}

	//查询所有数据 返回数组
	public function getAll($sql) {
		$data = array();  // ||$data = [];
		$res = $this->query($sql);
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
		return $data;
	}	
}

$mysql = new MySQL();
// 19行 $mysql->conn();

$a = $mysql->getAll('select * from user');
var_dump($a);




?>