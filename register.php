<?php
require_once 'conn/config.inc.php';

$smarty->display('register.html');
if(isset($_POST['retister'])){
	$post = unhtml($_POST);
	$post['pwd'] = md5($post['pwd']);
	$time = date("Y-m-d H:i:s");
	$ip = GetIP();
	if($post['checkcode']!=strtolower($_SESSION['codeNum'])){
		echo '<script>alert("验证码错误")</script>';
		exit;
	}
	$sql = mysqli_query($connect,"select * from tb_user where usernc='{$post['username']}'");
	if($sql->num_rows){
		echo '<script>alert("用户已存在！")</script>';
		exit;
	}
	$sql = mysqli_query($connect,"INSERT INTO `tb_user` (`usernc`, `truename`, `pwd`, `email`, `sex`, `tel`, `qq`, `address`, `logintimes`, `regtime`, `lastlogintime`, `ip`, `yb`, `usertype`, `question`, `answer`, `truepwd`, `photo`, `pubtimes`) VALUES ('{$post['username']}', '{$post['nickname']}', '{$post['pwd']}', '{$post['email']}', '{$post['sex']}', '{$post['tel']}', '{$post['qqnumber']}', '{$post['address']}', '1', '$time', '$time', '$ip', '{$post['youbian']}', '1', '{$post['question']}', '{$post['answer']}', '', '{$post['headimg']}', '0');") or die("<script>alert('注册失败！请重试！')</script>");
	$_SESSION['usernc'] = $post['username'];
	$_SESSION['username'] = $post['nickname'];
	echo "<script>alert('注册成功！');window.location.href='index.php';</script>";
}
?>