<?php /* Smarty version 3.1.24, created on 2017-03-03 14:33:05
         compiled from "./tpl/Public/js.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214362219158b97091eeb145_87152821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d507ac4d01ca65be0d34ee371893de56b535730' => 
    array (
      0 => './tpl/Public/js.tpl',
      1 => 1482802303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214362219158b97091eeb145_87152821',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b97091eee7c1_50668462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b97091eee7c1_50668462')) {
function content_58b97091eee7c1_50668462 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '214362219158b97091eeb145_87152821';
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