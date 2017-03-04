<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 15/12/9
 * Time: 下午6:04
 */

$aryCmd = array(
    'login_in',//登录页面
    'login',//登录处理
    'logout',//退出登录

);
$cmd = (!empty($_GET['cmd']) && in_array($_GET['cmd'], $aryCmd))?$_GET['cmd']:'login_in';
$_SG['tpl'] = $do.'/'.$cmd.'.tpl';
switch ($cmd){
    case 'login_in':
        login_in();
        break;
    case 'login':
        login($username,$password);
        break;
    case 'logout':
        logout();
        break;
}

function login_in(){
    global $_SG;

    $_SG['view']->display($_SG['tpl']);
}
function login($username,$password){
    global $_SG;
    if(!empty($username)&&!empty($password)){
        if(strlen($password)>=6) {
            $sql = "select * from tbl_admin where admin_user = '" . $username . "' limit 1";
            $row = $_SG['pdo']->find($sql);
            $hash = $row['admin_password'];
            // if (password_verify($password, $hash)) {
            //     $_SESSION['admin'] = $row;
            //     echo "<script>window.location.href='index.php'</script>";
            //     exit;
            // } else {
            //     echo_js_tips_back('用户名和密码错误');
            // }
            if ($password == $hash) {
                $_SESSION['admin'] = $row;
                echo "<script>window.location.href='index.php'</script>";
                exit;
            } else {
                echo_js_tips_back('用户名和密码错误');
            }
        }else{
            echo_js_tips_back('密码不能小于6位');
        }
    }else{
        echo_js_tips_back('用户名和密码不能为空');
    }
}
function logout()
{
    unset($_SESSION['admin']);
    if (empty($_SESSION['admin'])) {
        echo "<script>window.location.href='?do=Login&cmd=login_in'</script>";
    }else{
        echo_js_tips_back('系统异常');
    }
}