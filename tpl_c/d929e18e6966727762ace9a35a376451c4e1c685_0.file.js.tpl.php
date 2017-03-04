<?php /* Smarty version 3.1.24, created on 2016-12-27 02:57:53
         compiled from "./tpl/Public/js.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9121442615861caa1174a06_70105348%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd929e18e6966727762ace9a35a376451c4e1c685' => 
    array (
      0 => './tpl/Public/js.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9121442615861caa1174a06_70105348',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5861caa11773a8_25166555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861caa11773a8_25166555')) {
function content_5861caa11773a8_25166555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9121442615861caa1174a06_70105348';
?>
    <?php echo '<script'; ?>
 src="./assets//lib/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./assets//lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./assets//lib/common.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="./assets//lib/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }
            $('[data-popover="true"]').popover({html: true});
            $(function() {
                var uls = $('.sidebar-nav > ul > *').clone();
                uls.addClass('visible-xs');
                $('#main-menu').append(uls.clone());
            });
        });
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    <?php echo '</script'; ?>
>

<?php }
}
?>