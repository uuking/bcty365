<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-17 16:09:19
         compiled from "templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:275455507a03b57f908-86976362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94824e82ff23485806db5d4320cc205805b225ee' => 
    array (
      0 => 'templates\\header.html',
      1 => 1426579754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275455507a03b57f908-86976362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5507a03b593183_21300430',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507a03b593183_21300430')) {function content_5507a03b593183_21300430($_smarty_tpl) {?><!DOCTYPE html>
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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">切换导航</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">导航</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">链接</a>
						</li>
						<li>
							<a href="#">链接</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉菜单<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">列表一</a>
								</li>
								<li>
									<a href="#">列表二</a>
								</li>
								<li>
									<a href="#">列表三</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">更多列表</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">更多列表</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">链接</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉菜单<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">列表一</a>
								</li>
								<li>
									<a href="#">列表二</a>
								</li>
								<li>
									<a href="#">列表三</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">更多列表</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">更多列表</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			
			<div id="top">
				<div id="topBar">
					<div class="userPanel">
						<form action="test.php" method="post">
							<ul>
								<li>用户名：
									<input type="text">
								</li>
								<li>
								密码：
									<input type="text">
								</li>
								<li>
								验证码：
									<input type="text">
								</li>
								<li>
									<img src="libs/captcha.php" alt="" onclick="javascript:this.src='libs/captcha.php?time='+Math.random();">
								</li>
								<li>
									<button class="btn btn-default" type="submit">登陆</button>
								</li>
								<li><a href="">注册</a></li>
								<li><a href="">找回密码</a></li>
								<li>今天是：2015-03-17</li>
							</ul>
						</form>
					</div>
				</div>
				
			</div><?php }} ?>
