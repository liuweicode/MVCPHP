<?php /* Smarty version 3.1.24, created on 2017-03-02 14:50:21
         compiled from "./tpl/Article/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212494243758b8231de95140_28599835%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd6dcceb1facf7c4bfb70775598e3e287e29767c' => 
    array (
      0 => './tpl/Article/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212494243758b8231de95140_28599835',
  'variables' => 
  array (
    'list' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b8231dedd401_78177323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b8231dedd401_78177323')) {
function content_58b8231dedd401_78177323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212494243758b8231de95140_28599835';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=Article&cmd=add'"><i class="fa fa-plus"></i> 增加</button>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>标题</th>
        <th>首页&轮播</th>
        <th>作者id</th>
        <th>封面</th>
        <th>文章图</th>
        <th>作品时间</th>
        <th style="width: 3.5em;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
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
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['article_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['article_title'];?>
</td>
        <td><?php if (($_smarty_tpl->tpl_vars['vo']->value['show_location']) == 1) {?>首页文章位<?php } else { ?>首页轮播位<?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['author_id'];?>
</td>
        <td><img src="./<?php echo $_smarty_tpl->tpl_vars['vo']->value['cover'];?>
" width="100" height="100"></td>
        <td><img src="./<?php echo $_smarty_tpl->tpl_vars['vo']->value['covers'];?>
" width="100" height="100"></td>
        <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['vo']->value['create_datetime']);?>
</td>
        <td>
            <a href="?do=Article&cmd=edit&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['article_id'];?>
"><i class="fa fa-pencil"></i></a>
            <a href="#myModal" role="button" class="delete_row" data-toggle="modal"
               link="?do=Article&cmd=del&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['article_id'];?>
"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
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
    $(function () { //删除方法
        var link = '';
        $('.delete_row').click(function () {
            link = $(this).attr('link');
            console.log(link);
        })
        $('#del_confirm').click(function () {
            if (link != '') {
                window.location.href = link;
            } else {
                $('#del_tips').modal('hide')
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
?>