<?php /* Smarty version 3.1.24, created on 2017-03-03 14:37:49
         compiled from "./tpl/Public/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18070451958b971ad419740_30993374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e234e659af756694cdfee7d6b4a8d8acaa7a54fa' => 
    array (
      0 => './tpl/Public/header.tpl',
      1 => 1488548264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18070451958b971ad419740_30993374',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b971ad440517_28973576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b971ad440517_28973576')) {
function content_58b971ad440517_28973576 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18070451958b971ad419740_30993374';
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>六维空间</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $_smarty_tpl->getSubTemplate ('Public/css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body class="theme-3">
<!--[if lt IE 7 ]> <body class="ie ie6 theme-3"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 theme-3"> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 theme-3"> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 theme-3"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php echo $_smarty_tpl->getSubTemplate ('Public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
<?php }
}
?>