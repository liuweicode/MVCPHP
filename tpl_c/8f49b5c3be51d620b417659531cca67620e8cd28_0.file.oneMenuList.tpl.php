<?php /* Smarty version 3.1.24, created on 2016-12-27 02:58:10
         compiled from "./tpl/Permissions/oneMenuList.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15627730255861cab2e93988_86797057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f49b5c3be51d620b417659531cca67620e8cd28' => 
    array (
      0 => './tpl/Permissions/oneMenuList.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15627730255861cab2e93988_86797057',
  'variables' => 
  array (
    'permissions_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861cab2ec0e61_62910271',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861cab2ec0e61_62910271')) {
function content_5861cab2ec0e61_62910271 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15627730255861cab2e93988_86797057';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=Permissions&cmd=oneMenuAdd'"><i class="fa fa-plus"></i> 增加菜单</button>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>标题</th>
            <th>控制器名称</th>
            <th>默认方法名称</th>
            <th>fid</th>
            <th>类型</th>
            <th style="width: 3.5em;">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['permissions_arr']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['controller_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['view_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['fid'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['vo']->value['type'] == '0') {?>
                    一级菜单
                    <?php } elseif ($_smarty_tpl->tpl_vars['vo']->value['type'] == '1') {?>
                    二级菜单
                    <?php } else { ?>
                    可跳转一级菜单
                    <?php }?>
                </td>
                <td>
                    <a href="?do=Permissions&cmd=oneMenuEdit&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><i class="fa fa-pencil"></i></a>
                    <a href="#del_tips" role="button" class="delete_row" data-toggle="modal" link="?do=Permissions&cmd=oneMenuDel&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
        </tbody>
    </table>

<div class="modal small fade" id="del_tips" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">你确定要删除当前数据么?</h3>
            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i>如果误删除,如需恢复请与管理员联系</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
                <button class="btn btn-danger" data-dismiss="modal" id="del_confirm">确认</button>
            </div>
        </div>
    </div>
</div>

    <?php echo $_smarty_tpl->getSubTemplate ('Public/body_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){ //删除方法
        var link = '';
        $('.delete_row').click(function(){
            link = $(this).attr('link');
        })
        $('#del_confirm').click(function(){
            if(link != ''){
                window.location.href = link ;
            }else{
                $('#del_tips').modal('hide')
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
?>