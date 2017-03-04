<?php /* Smarty version 3.1.24, created on 2016-12-27 02:58:06
         compiled from "./tpl/CarModel/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1747952095861caae9f5b93_93062523%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90db8b6971882abec9c85d2a74c8da42e47f839' => 
    array (
      0 => './tpl/CarModel/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747952095861caae9f5b93_93062523',
  'variables' => 
  array (
    'car_model_arr' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caaea21b46_85361567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caaea21b46_85361567')) {
function content_5861caaea21b46_85361567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1747952095861caae9f5b93_93062523';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=CarModel&cmd=add'"><i class="fa fa-plus"></i>
            增加
        </button>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>首字母</th>
        <th>名称</th>
        <th>封面</th>
        <th>时间</th>
        <th>查看车辆</th>
        <th style="width: 3.5em;">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['car_model_arr']->value;
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
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['model_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['acronym'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vo']->value['car_name'];?>
</td>
        <td>
            <img src="./<?php echo $_smarty_tpl->tpl_vars['vo']->value['car_cover'];?>
" width="100" height="100">
        </td>
        <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['vo']->value['create_time']);?>
</td>
        <td>
            <button onclick="window.location.href='?do=Car&cmd=lists&fid=<?php echo $_smarty_tpl->tpl_vars['vo']->value['model_id'];?>
'" type="button"
                    class="btn btn-outline btn-default">查看车辆
            </button>
            <br>
            <button onclick="window.location.href='?do=CarModel&cmd=media_lists&fid=<?php echo $_smarty_tpl->tpl_vars['vo']->value['model_id'];?>
'" type="button"
                    class="btn btn-outline btn-default">车型图片
            </button>
        </td>
        <td>
            <a href="?do=CarModel&cmd=edit&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['model_id'];?>
"><i class="fa fa-pencil"></i></a>
            <a href="#myModal" role="button" class="delete_row" data-toggle="modal"
               link="?do=CarModel&cmd=del&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['model_id'];?>
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