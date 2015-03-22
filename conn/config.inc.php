<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");//设置全局编码
	require_once "libs/Smarty.class.php"; //包含smarty类文件
	require_once "libs/page.class.php"; //分页类
	$smarty = new Smarty(); //建立smarty实例对象$smarty
	$smarty->caching=false; //是否使用缓存，项目在调试期间，不建议启用缓存
	$smarty->template_dir = "templates"; //设置模板目录
	$smarty->compile_dir = "templates_c"; //设置编译目录
	$smarty->cache_dir = "cache"; //缓存文件夹
	$smarty->cache_lifetime = 120; //缓存存活时间
	$smarty->left_delimiter = "<{"; //左定界符
	$smarty->right_delimiter = "}>"; //右定界符 

	$connect = mysqli_connect("localhost", "root", "root") or die("链接数据库失败！");
	mysqli_select_db($connect,"db_bcty365" ) or die("选择数据库失败");
	mysqli_query($connect,"SET NAMES 'utf8'");
	if(isset($_SESSION['usernc'])){
		$smarty->assign('usernc','islogin');
		$smarty->assign('username',$_SESSION['username']);
	}
	$smarty->assign('now',date('Y-m-d'));
	// 打印函数
	function p($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}

	function unhtml($arr){
		foreach ($arr as $key => $value) {
			$arr[$key]=trim(addslashes($value));
		}
		return $arr;
	}

	function GetIP(){
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
		$ip = $_SERVER['REMOTE_ADDR'];
	else
		$ip = "unknown";
	return($ip);
}
?>