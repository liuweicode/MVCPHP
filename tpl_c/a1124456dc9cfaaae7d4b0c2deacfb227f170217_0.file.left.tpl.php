<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:53
         compiled from "./tpl/Public/left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18550638675861caa1142635_32039836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1124456dc9cfaaae7d4b0c2deacfb227f170217' => 
    array (
      0 => './tpl/Public/left.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18550638675861caa1142635_32039836',
  'variables' => 
  array (
    'vo' => 0,
    'key' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caa11616c3_18497199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caa11616c3_18497199')) {
function content_5861caa11616c3_18497199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18550638675861caa1142635_32039836';
?>

<div class="sidebar-nav">
    <ul>
        <li>
            <?php if ($_SESSION['admin']['admin_id'] == 1) {?>
            <a href="?do=Permissions&cmd=oneMenuList" class="nav-header"><i class="fa fa-fw fa-legal"></i> 系统管理</a>
            <?php }?>
        </li>
        <?php
$_from = $_SESSION['permissions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
        <?php if ($_smarty_tpl->tpl_vars['vo']->value['type'] == '2') {?>
        <li>
            <a href="?do=<?php echo $_smarty_tpl->tpl_vars['vo']->value['controller_name'];?>
&cmd=<?php echo $_smarty_tpl->tpl_vars['vo']->value['view_name'];?>
" class="nav-header"><i class="fa fa-fw fa-fighter-jet"></i> <?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a>
        </li>
        <?php } else { ?>
        <li>
            <a href="#" data-target=".legal-menu-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="nav-header  <?php if (isset($_smarty_tpl->tpl_vars['vo']->value['is_selected']) && $_smarty_tpl->tpl_vars['vo']->value['is_selected'] == '1') {?> collaps <?php } else { ?> collapsed <?php }?>" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i> <?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="legal-menu-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 nav nav-list collapse <?php if (isset($_smarty_tpl->tpl_vars['vo']->value['is_selected']) && $_smarty_tpl->tpl_vars['vo']->value['is_selected'] == '1') {?> in <?php }?>" style="height: auto;">
                <?php
$_from = $_smarty_tpl->tpl_vars['vo']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                <li <?php if (isset($_smarty_tpl->tpl_vars['v']->value['is_selected']) && $_smarty_tpl->tpl_vars['v']->value['is_selected'] == '1') {?> class="active" <?php }?> ><a href="?do=<?php echo $_smarty_tpl->tpl_vars['v']->value['controller_name'];?>
&cmd=<?php echo $_smarty_tpl->tpl_vars['v']->value['view_name'];?>
"><span class="fa fa-caret-right"></span> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
            </ul>
        </li>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
    </ul>
</div><?php }
}
?>