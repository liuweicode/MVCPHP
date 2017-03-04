<?php /* Smarty version 3.1.24, created on 2016-12-27 02:58:53
         compiled from "./tpl/Permissions/oneMenuEdit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9053531025861cadd53f296_17080220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5154f575ecb3cf3f29d71cbbe787f17037c85f' => 
    array (
      0 => './tpl/Permissions/oneMenuEdit.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9053531025861cadd53f296_17080220',
  'variables' => 
  array (
    'data' => 0,
    'fid_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861cadd57dac5_31437606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861cadd57dac5_31437606')) {
function content_5861cadd57dac5_31437606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9053531025861cadd53f296_17080220';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main-content">
            <div class="row">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="home">
                            <form action="?do=Permissions&cmd=oneMenuEditCl&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '0') {?>
                                            一级菜单
                                            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['type'] == '1') {?>
                                            二级菜单
                                            <?php } else { ?>
                                            可跳转一级菜单
                                            <?php }?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>标题</label>
                                        <input name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>控制器名称</label>
                                        <input name="controller_name"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['controller_name'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '0') {?> disabled <?php }?>>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>方法名称</label>
                                        <input name="view_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['view_name'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '0') {?> disabled <?php }?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>选择类型(默认1级)</label>
                                        <select name="type" class="form-control" disabled>
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '0') {?> selected <?php }?>>一级导航</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '1') {?> selected <?php }?>>二级导航</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '2') {?> selected <?php }?>>可跳转一级菜单</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == '1') {?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>父导航</label>
                                        <select name="fid"  class="form-control">
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
" <?php if ($_smarty_tpl->tpl_vars['data']->value['fid'] == $_smarty_tpl->tpl_vars['vo']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                                        </select>
                                    </div>
                                </div>
                                <?php }?>
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