<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 16:31:15
         compiled from "templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1195055092f54880267-75010225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94824e82ff23485806db5d4320cc205805b225ee' => 
    array (
      0 => 'templates\\header.html',
      1 => 1426753870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1195055092f54880267-75010225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55092f5488fc68_00231009',
  'variables' => 
  array (
    'usernc' => 0,
    'now' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55092f5488fc68_00231009')) {function content_55092f5488fc68_00231009($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bcty网上社区</title>
	<link href="media/css/bootstrap.min.css" rel="stylesheet">
	<link href="media/css/base.css" rel="stylesheet">
	</head>
<body>
	<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">首页</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">首页</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">技术支持</a>
						</li>
						<li>
							<a href="#">在线订购</a>
						</li>
						<li>
							<a href="#">升级下载</a>
						</li>
						<li>
							<a href="#">社区论坛</a>
						</li>
						<li>
							<a href="#">购买须知</a>
						</li>
						<li>
							<a href="#">软件下载</a>
						</li>
						<li>
							<a href="#">联系我们</a>
						</li>
					</ul>
				</div>
				
			</nav>
			
			<div id="top">
				<div id="topBar">
					<div class="userPanel">
					<?php if (!isset($_smarty_tpl->tpl_vars['usernc']->value)) {?>
						<form id="loginform">
							<ul>
								<li>用户名：
									<input type="text" placeholder="用户名" name="usernc">
								</li>
								<li>
								密码：
									<input type="password" placeholder="密码" name="userpwd">
								</li>
								<li>
								验证码：
									<input type="text" placeholder="验证码" name="xym">
								</li>
								<li>
									<img src="libs/captcha.php" alt="" onclick="javascript:this.src='libs/captcha.php?time='+Math.random();">
								</li>
								<li>
									<button id="login" class="btn btn-default" type="button">登陆</button>
								</li>
								<li><a href="register.php">注册</a></li>
								<li><a href="">找回密码</a></li>
								<li>今天是：<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</li>
							</ul>
						</form>
						<?php } else { ?>
						<ul>
							<li>用户名：
								<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

							</li>
							<li>
							<a href="" class="a4">更改注册信息</a>
							</li>

							<li><a href="user.php?action=logout" class="a4">退出登录</a></li>
							<li>今天是：<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</li>
						</ul>
						<?php }?>
					</div>
				</div>
				
			</div><?php }} ?>
