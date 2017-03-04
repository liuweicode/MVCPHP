<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:53
         compiled from "./tpl/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18560569645861caa110d562_51746611%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a4f2cdd8c90f3a7af1553df9453a696af1e08d' => 
    array (
      0 => './tpl/index.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18560569645861caa110d562_51746611',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caa112fb44_26339664',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caa112fb44_26339664')) {
function content_5861caa112fb44_26339664 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18560569645861caa110d562_51746611';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <h2>欢迎<?php echo $_SESSION['admin']['admin_name'];?>
使用秒速后台管理!</h2>

    <?php echo $_smarty_tpl->getSubTemplate ('Public/body_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>