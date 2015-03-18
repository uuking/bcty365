<?php
session_start();
require_once 'conn/config.inc.php';
if(isset($_SESSION['usernc'])){
	$smarty->assign('usernc','islogin');
	$smarty->assign('username',$_SESSION['username']);
}
$smarty->assign('now',date('Y-m-d'));
$smarty->display('index.html');
?>