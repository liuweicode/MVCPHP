<?php /* Smarty version 3.1.24, created on 2016-12-28 07:45:12
         compiled from "./tpl/Car/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32053362858635f78beea37_17328091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab01dade8e260f7ef1bc51c06274b83c7a4aabdb' => 
    array (
      0 => './tpl/Car/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32053362858635f78beea37_17328091',
  'variables' => 
  array (
    'arr' => 0,
    'car_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58635f78c46796_84681083',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58635f78c46796_84681083')) {
function content_58635f78c46796_84681083 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32053362858635f78beea37_17328091';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <?php if (!empty($_smarty_tpl->tpl_vars['arr']->value['fid'])) {?>
        <button class="btn btn-primary"onclick="window.location.href='?do=Car&cmd=add&fid=<?php echo $_smarty_tpl->tpl_vars['arr']->value['fid'];?>
'"><i class="fa fa-plus"></i>增加</button>
        <?php } else { ?> <button class="btn btn-primary" onclick="window.location.href='?do=Car&cmd=add'"><i class="fa fa-plus"></i> 增加</button>
        <?php }?>
    </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>车型名称</th>
            <th>车牌号</th>
            <th>车架号</th>
            <th>所在城市</th>
            <th>出厂日期</th>
            <th>是否就绪</th>
            <th>是否上架</th>
            <th style="width: 5em;">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['car_arr']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['car_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['car_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['car_number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['car_vin'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['city'];?>
</td>
                <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['vo']->value['manufacture_date']);?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['vo']->value['is_ready'] == '1') {?>
                    <span class="label label-success tag">已就绪</span>
                    <?php } else { ?>
                    <span class="label label-danger tag">未就绪</span>
                    <?php }?>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['vo']->value['is_used'] == '1') {?>
                    <span class="label label-success tag">已上架</span>
                    <?php } else { ?>
                    <span class="label label-danger tag">未上架</span>
                    <?php }?>
                </td>
                <td>
                    <a href="?do=Car&cmd=details&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['car_id'];?>
&date=<?php echo date('Y-m',time());?>
">查看</a>
                    <a href="?do=Car&cmd=edit&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['car_id'];?>
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