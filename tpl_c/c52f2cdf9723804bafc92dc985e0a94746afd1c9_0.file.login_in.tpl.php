<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:27
         compiled from "./tpl/Login/login_in.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20028986745861ca872e5b29_96969049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52f2cdf9723804bafc92dc985e0a94746afd1c9' => 
    array (
      0 => './tpl/Login/login_in.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20028986745861ca872e5b29_96969049',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861ca873050a0_63254283',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861ca873050a0_63254283')) {
function content_5861ca873050a0_63254283 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20028986745861ca872e5b29_96969049';
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/lib/font-awesome/css/font-awesome.css">

    <?php echo '<script'; ?>
 src="./assets/lib/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>



    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/premium.css">

</head>
<body class=" theme-blue">

<!-- Demo page code -->

<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        var match = document.cookie.match(new RegExp('color=([^;]+)'));
        if(match) var color = match[1];
        if(color) {
            $('body').removeClass(function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ')
            })
            $('body').addClass('theme-' + color);
        }

        $('[data-popover="true"]').popover({html: true});

    });
<?php echo '</script'; ?>
>
<style type="text/css">
    #line-chart {
        height:300px;
        width:800px;
        margin: 0px auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
</style>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        var uls = $('.sidebar-nav > ul > *').clone();
        uls.addClass('visible-xs');
        $('#main-menu').append(uls.clone());
    });
<?php echo '</script'; ?>
>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="./assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">


<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<!--<![endif]-->

<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 秒速后台登录管理</span></a></div>

    <div class="navbar-collapse collapse" style="height: 1px;">

    </div>
</div>
</div>



<div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">登 录</p>
        <div class="panel-body">
            <form action="index.php?do=Login&cmd=login" method="post">
                <div class="form-group">
                    <label>用户名</label>
                    <input name="username" type="text" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input name="password" type="password" class="form-controlspan12 form-control">
                </div>

                <button class="btn btn-primary"> 确认</button>

                <label class="remember-me"><input type="checkbox">  记住密码</label>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>



<?php echo '<script'; ?>
 src="./assets/lib/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
<?php echo '</script'; ?>
>


</body></html>
<?php }
}
?>