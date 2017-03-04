<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:53
         compiled from "./tpl/Public/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19926503185861caa1133379_40727334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717a4108ef8cb67d213e3d5cb9a2bc79f4ec711f' => 
    array (
      0 => './tpl/Public/header.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19926503185861caa1133379_40727334',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caa113a414_01053689',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caa113a414_01053689')) {
function content_5861caa113a414_01053689 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19926503185861caa1133379_40727334';
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>秒速管理系统v1.0</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $_smarty_tpl->getSubTemplate ('Public/css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=63e5237b7041b2349c2dc331404cfabf"><?php echo '</script'; ?>
>
</head>
<body class="theme-3">
<!--[if lt IE 7 ]> <body class="ie ie6 theme-3"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 theme-3"> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 theme-3"> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 theme-3"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 秒速后台管理</span></a></div>

    <div class="navbar-collapse collapse" style="height: 1px;">
        <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo $_SESSION['admin']['admin_name'];?>

                    <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu">
                    <!--<li><a href="./">My Account</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Admin Panel</li>
                    <li><a href="./">Users</a></li>
                    <li><a href="./">Security</a></li>
                    <li><a tabindex="-1" href="./">Payments</a></li>
                    <li class="divider"></li>-->
                    <li><a tabindex="-1" href="?do=Login&cmd=logout">退出</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
<?php }
}
?>