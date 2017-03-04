<?php /* Smarty version 3.1.24, created on 2016-12-27 02:59:11
         compiled from "./tpl/Users/user_up.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9772192015861caef0c4200_91759775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af10eece463582bddab61a45050b37fc5ed8bce0' => 
    array (
      0 => './tpl/Users/user_up.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9772192015861caef0c4200_91759775',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caef0f5a41_19295007',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caef0f5a41_19295007')) {
function content_5861caef0f5a41_19295007 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9772192015861caef0c4200_91759775';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="row">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
            <form action="index.php?do=Users&cmd=user_upcl&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['admin_id'];?>
" method="post">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>用户昵称</label>
                        <input name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['admin_name'];?>
" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>用户名</label>
                        <input name="user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['admin_user'];?>
" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>密码</label>
                        <input name="password"  type="password" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>权限</label>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>
                                <th>标题</th>
                                <th>控制器名称</th>
                                <th>默认方法名称</th>
                                <th>类型</th>
                                <th>fid</th>
                            </tr>
                            </thead>
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
                                <!--checked-->
                                <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name = 'permission[]' <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['list']->value['admin_permission'])) {?> checked <?php }?>>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['controller_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['view_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
</td>

                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        </table>
                    </div>
                </div>

                </div>
                <div class="col-md-12">
                    <div class="btn-toolbar list-toolbar">
                        <button class="btn btn-primary"><i class="fa fa-save"></i> 确认</button>
                        <a href=" " onclick="history.go(-1)" data-toggle="modal" class="btn btn-danger">返回</a >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>