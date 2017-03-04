<?php /* Smarty version 3.1.24, created on 2016-12-28 07:45:14
         compiled from "./tpl/City/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:160331135758635f7a95cb20_09506644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3897b1734fbe380644caacead952528b1f114c' => 
    array (
      0 => './tpl/City/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160331135758635f7a95cb20_09506644',
  'variables' => 
  array (
    'city_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58635f7a9814f9_85220399',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58635f7a9814f9_85220399')) {
function content_58635f7a9814f9_85220399 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '160331135758635f7a95cb20_09506644';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=City&cmd=add'"><i class="fa fa-plus"></i> 增加</button>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>城市</th>
        <th style="width: 3.5em;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['city_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['city_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['city'];?>
</td>
        <td>
            <a href="?do=City&cmd=edit&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['city_id'];?>
"><i class="fa fa-pencil"></i></a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
    </tbody>
</table>



<?php echo $_smarty_tpl->getSubTemplate ('Public/body_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>