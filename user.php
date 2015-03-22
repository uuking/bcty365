<?php
require_once 'conn/config.inc.php';
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&&strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	$ip = GetIP();
	$lastlogintime=date('Y-m-d H:i:s');
	foreach ($_POST as $key => $value) {
		$post[$key]=addslashes($value);
	}
	if($post['usernc']==''){
		echo "用户名不能为空！";
		exit;
	}elseif ($post['userpwd']=='') {
		echo "密码不能为空！";
		exit;
	}elseif ($post['xym']=='') {
		echo "验证码不能为空！";
		exit;
	}

	if($post['xym']!=strtolower($_SESSION['codeNum'])){
		echo '验证码错误！';
		exit;
	}
	
	$post['userpwd'] = md5($post['userpwd']);
	$sql = mysqli_query($connect,"select * from tb_user where usernc='{$post['usernc']}' and pwd='{$post['userpwd']}'");
	if($row = mysqli_fetch_assoc($sql)){
		mysqli_query($connect,"update tb_user set logintimes=logintimes+1,ip='$ip',lastlogintime='$lastlogintime' where usernc='{$post['usernc']}' and usertype=1");
		$_SESSION['usernc']=$post['usernc'];
		$_SESSION['username'] = $row['truename'];
		echo '登录成功！';
	}else{
		echo '用户名或密码错误！';
	}
}elseif(isset($_GET['action']) and $_GET['action']=='logout'){
	unset($_SESSION['usernc']);
    unset($_SESSION['username']);
	header("location:index.php");
}else{
	header("location:index.php");
}
?>