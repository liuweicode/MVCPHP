<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:53
         compiled from "./tpl/Public/body_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12933152305861caa1164cd4_45084024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8dae9660d7ba8c3a0a98ca0e54642ec7f4cadcc' => 
    array (
      0 => './tpl/Public/body_header.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12933152305861caa1164cd4_45084024',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caa116bdd1_19517555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caa116bdd1_19517555')) {
function content_5861caa116bdd1_19517555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12933152305861caa1164cd4_45084024';
?>
<div class="header">
    <!--<div class="stats">
        <p class="stat"><span class="label label-info">5</span> Tickets</p>
        <p class="stat"><span class="label label-success">27</span> Tasks</p>
        <p class="stat"><span class="label label-danger">15</span> Overdue</p>
    </div> -->

    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <ul class="breadcrumb">
        <li><a href="?do=index&cmd=index">主页</a> </li>
        <?php if (count($_SESSION['nav_data']) > 0) {?>
        <li><a href="<?php echo $_SESSION['nav_data']['url'];?>
"><?php echo $_SESSION['nav_data']['title'];?>
</a> </li>
        <?php }?>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ul>

</div>
<?php }
}
?>