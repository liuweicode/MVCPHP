<?php /* Smarty version 3.1.24, created on 2016-12-27 02:59:30
         compiled from "./tpl/Message/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9148934155861cb02889ba3_57728840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '194eebe3e8c1b8bbcf1a4933dbd0c089d0a38bea' => 
    array (
      0 => './tpl/Message/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9148934155861cb02889ba3_57728840',
  'variables' => 
  array (
    'data' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861cb028b5f88_74285738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861cb028b5f88_74285738')) {
function content_5861cb028b5f88_74285738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9148934155861cb02889ba3_57728840';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=Message&cmd=add'"><i class="fa fa-plus"></i> 发消息</button>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>发送时间</th>
        <th>发送对像</th>
        <th>信息内容</th>
        <th style="width: 3.5em;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
        <td><?php echo date('Y-d-m',$_smarty_tpl->tpl_vars['vo']->value['create_time']);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</td>
        <td>
            <a href="?do=Message&cmd=details&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
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