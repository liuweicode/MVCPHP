<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>六维空间</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {#include file='Public/css.tpl'#}
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
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> {#$smarty.session.admin.admin_name#}
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
{#include file='Public/left.tpl'#}
<div class="content">
