<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 15/12/9
 * Time: 下午6:04
 */

$aryCmd = array(
    'index',//登录页面

);

$cmd = (!empty($_GET['cmd']) && in_array($_GET['cmd'], $aryCmd))?$_GET['cmd']:'index';

switch ($cmd){
    case 'index':
        index();
        break;
}
function index(){
    global $_SG;
    $_SG['view']->assign('title', '主页');
    $_SG['view']->display('index.tpl');
}
