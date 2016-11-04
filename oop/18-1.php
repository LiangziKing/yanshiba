<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-28 20:13:57
 * @version $Id$
 */


/**

18 self与parent  2




*/

class Par{
	public function __construct(){
		echo rand(111,9999);
	}
}

class Son extends Par{
	public function __construct(){
		parent ::__construct();
		echo 1;
	}
}

new Son();











?>