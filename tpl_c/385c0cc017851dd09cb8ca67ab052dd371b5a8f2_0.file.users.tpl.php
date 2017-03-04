<?php /* Smarty version 3.1.24, created on 2016-12-27 02:58:02
         compiled from "./tpl/Users/users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10891527135861caaa052b68_72971323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385c0cc017851dd09cb8ca67ab052dd371b5a8f2' => 
    array (
      0 => './tpl/Users/users.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10891527135861caaa052b68_72971323',
  'variables' => 
  array (
    'row' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caaa07c936_67725954',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caaa07c936_67725954')) {
function content_5861caaa07c936_67725954 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10891527135861caaa052b68_72971323';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

        <div class="btn-toolbar list-toolbar">
            <button onclick="window.location.href='index.php?do=Users&cmd=user_new'" class="btn btn-primary"><i class="fa fa-plus"></i> 添加</button>
            <div class="btn-group">
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>用户昵称</th>
                <th>用户名</th>
                <th>权限</th>
                <th style="width: 3.5em;">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_user'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_permission'];?>
</td>
                <td>
                    <a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
&do=Users&cmd=user_up"><i class="fa fa-pencil"></i></a>
                    <a href="#myModal" role="button" class="delete_row" data-toggle="modal" link="?do=Users&cmd=user_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
            </tbody>
        </table>

        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Delete Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>你确定你要删除吗用户?<br>这无法回复。</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-danger" data-dismiss="modal" id="del_confirm">Delete</button>
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
            console.log(link);
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