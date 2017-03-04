<?php /* Smarty version 3.1.24, created on 2016-12-27 02:59:24
         compiled from "./tpl/Member/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16047577965861cafc03bcb8_48903495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5181951281fdc5c9cedd5686e92adbbd231fef8a' => 
    array (
      0 => './tpl/Member/lists.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16047577965861cafc03bcb8_48903495',
  'variables' => 
  array (
    'row' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861cafc0718f5_28352919',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861cafc0718f5_28352919')) {
function content_5861cafc0718f5_28352919 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16047577965861cafc03bcb8_48903495';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=Member&cmd=add'"><i class="fa fa-plus"></i> 增加</button>
        <div class="btn-group">
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>会员ID</th>
            <th>用户手机号</th>
            <th>用户姓名</th>
            <th>用户Email</th>
            <th>会员开通时间</th>
            <th>会员结束时间</th>
            <th>可用车的总天数</th>
            <th>剩余可用车天数</th>
            <th>创建时间</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['member_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['member_phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['member_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['member_email'];?>
</td>
            <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['start_datetime']);?>
</td>
            <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['end_datetime']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['car_available_days'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['car_remain_days'];?>
</td>
            <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['create_datetime']);?>
</td>
            <td>
                <a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['member_id'];?>
&do=Member&cmd=edit"><i class="fa fa-pencil"></i></a>
                <a href="#myModal" role="button" class="delete_row" data-toggle="modal" link="?do=Member&cmd=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['member_id'];?>
"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
        </tbody>
    </table>


        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>



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