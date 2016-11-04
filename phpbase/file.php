<?php
/**
 * @authors Liangzi King (1990818918@qq.com)
 * @date    2016-10-24 21:27:29
 * @version $Id$
 */

/** 



*/

$path = './';
// print_r($_SERVER);exit;
$url = $_SERVER['REQUEST_URI'];

if(isset($_GET['dir'])) {
	$path = $path . '/' . $_GET['dir'];
} else {
	$url = $url . '?dir=.';
}

// echo $path;exit;
// echo realpath($path);exit;

$dh = opendir($path);
if ($dh===false) {
	echo '打开出错';
	exit;
}

$list = array();
while ( ($item = readdir($dh)) !== false) {
	$list[] = $item;
}

closedir($dh);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>文件管理系统</title>
</head>
<style>
	td{
		border: 1px solid gray;
	}
</style>
<body>
	<h1>文件管理系统</h1>
	<table>
		<tr>
			<td>序号</td>
			<td>文件名</td>
			<td>操作</td>
		</tr>
		<?php foreach ($list as $k=>$v) { 
			
		
		echo '<tr>';
		echo'	<td>',$k,'</td>';
		echo'	<td>',$v,'</td>';
		echo'	<td>';
		if(is_dir($path . './' . $v)){
			echo '<a href="',$url . '/',$v,'">浏览</a>';
		} else {
			echo '<a href="./',$_GET['dir'],'/',$v,'">查看</a>';
		}
		echo '</td>';
		echo '</tr>';

		}
		?>
	</table>
</body>
</html>