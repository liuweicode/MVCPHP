<?php /* Smarty version 3.1.24, created on 2017-03-02 14:50:24
         compiled from "./tpl/Article/add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:72770826958b82320658cf9_58525079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b2fff2aff33c0d3d1a5d750987797da46f6106' => 
    array (
      0 => './tpl/Article/add.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72770826958b82320658cf9_58525079',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b82320683525_75143201',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b82320683525_75143201')) {
function content_58b82320683525_75143201 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '72770826958b82320658cf9_58525079';
echo $_smarty_tpl->getSubTemplate ('Public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('Public/body_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="main-content">
    <div class="row">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane active in" id="home">
                <form action="?do=Article&cmd=addcl" name="form" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <input name="car_id" type="hidden" value="" class="form-control">
                        <div class="form-group">
                            <label>标题</label>
                            <input name="article_title" type="text" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>首页文章位&首页轮播位</label><br><br>
                            <label><input type="radio" value="1" checked name = 'show_location'>首页文章位</label>&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" value="2" name = 'show_location'>首页轮播位</label>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>封面 &nbsp;&nbsp;&nbsp;(图片大小为1242*389)</label>

                            <input name="cover" type="file" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>文章图 &nbsp;&nbsp;&nbsp;(图片大小为1242*931)</label>

                            <input name="covers" type="file" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>内容</label>
                            <?php echo '<script'; ?>
 id="container" name="article_content" type="text/plain" value="" style="width:900px;height:300px"><?php echo '</script'; ?>
>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
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


<?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/ueditor.config.js"><?php echo '</script'; ?>
>
<!-- 编辑器源码文件 -->
<?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/ueditor.all.js"><?php echo '</script'; ?>
>
<!-- 实例化编辑器 -->
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('container');
<?php echo '</script'; ?>
><?php }
}
?>