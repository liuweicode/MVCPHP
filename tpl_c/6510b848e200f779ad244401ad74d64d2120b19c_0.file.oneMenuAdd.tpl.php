<?php /* Smarty version 3.1.24, created on 2017-03-03 01:50:05
         compiled from "./tpl/Permissions/oneMenuAdd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157628877058b8bdbdbae5f0_62887719%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6510b848e200f779ad244401ad74d64d2120b19c' => 
    array (
      0 => './tpl/Permissions/oneMenuAdd.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157628877058b8bdbdbae5f0_62887719',
  'variables' => 
  array (
    'fid_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b8bdbdbffd16_25878231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b8bdbdbffd16_25878231')) {
function content_58b8bdbdbffd16_25878231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157628877058b8bdbdbae5f0_62887719';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main-content">
            <div class="row">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="home">
                            <form action="?do=Permissions&cmd=oneMenuAddCl" method="post">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>标题</label>
                                        <input name="title" type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>控制器名称</label>
                                        <input name="controller_name"  type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>方法名称</label>
                                        <input name="view_name" type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>选择类型(默认1级)</label>
                                        <select name="type" class="form-control">
                                            <option value="0">一级导航</option>
                                            <option value="1">二级导航</option>
                                            <option value="2">可跳转一级菜单</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>父导航</label>
                                        <select name="fid"  class="form-control">
                                            <option value="0">请选择父导航</option>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['fid_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btn-toolbar list-toolbar">
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> 确认</button>
                                        <a href="#" onclick="history.go(-1)" data-toggle="modal" class="btn btn-danger">返回</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
    <?php echo $_smarty_tpl->getSubTemplate ('Public/body_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>