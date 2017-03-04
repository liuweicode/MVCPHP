<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 15/12/9
 * Time: 下午6:04
 */

$aryCmd = array(
    'users',//用户管理
    'user_up',//修改用户页面
    'user_upcl',//修改用户处理
    'user_del',//删除用户
    'user_new',//新增用户页面
    'user_newcl'//新增用户处理
);
$cmd = (!empty($_GET['cmd']) && in_array($_GET['cmd'], $aryCmd)) ? $_GET['cmd'] : 'users';
$_SG['tpl'] = $do . '/' . $cmd . '.tpl';
$_SG['tpl_index'] = "?do=" . $do . "&cmd=lists";
switch ($cmd) {
    case 'users':
        users();
        break;
    case 'user_up':
        user_up();
        break;
    case 'user_upcl':
            try {
                if(empty($name) || empty($user) || empty($permission)){
                    echo_js_tips_back('缺少必要参数');
                }
                $permission = implode(',',$permission);
                $data['admin_permission'] = $permission;
                $data['admin_name'] = $name;
                $sql = "select admin_user from tbl_admin where admin_id ='" . $id . "' limit 1";
                $row = $_SG['pdo']->find($sql);
                if($row['admin_user']!= $user) {
                    $sql = "select admin_user from tbl_admin where admin_user ='" . $user . "' limit 1";
                    $row = $_SG['pdo']->find($sql);
                    if ($row>0) {
                        echo_js_tips_back('用户名已存在');
                    }
                        $data['admin_user'] = $user;
                    }
                if (!empty($password)) {
                    if (strlen($password) < 6) {
                        echo_js_tips_back('密码不能小于6位');
                    }
                    $pass = password_hash($password, PASSWORD_DEFAULT);
                    $data['admin_password'] = $pass;
                }
                $where = " admin_id = '" . $id . "'";
                $_SG['pdo']->save($data,"tbl_admin",$where);
                echo_js_tips_jump('更新成功', $_SG['tpl_index']);


            } catch (PDOException $e) {
                echo_js_tips_back('系统异常');
            }

        break;
    case 'user_del':
        user_del($id);
        break;
    case 'user_new':
        user_new();
        break;
    case 'user_newcl':
         if(empty($name) || empty($user) || empty($password) || empty($permission)){
             echo_js_tips_back('缺少必要参数');
         }
        $sql = "select admin_user from tbl_admin where admin_user ='" . $user . "' limit 1";
        $row = $_SG['pdo']->find($sql);
        if ($row > 0) {
            echo_js_tips_back('用户名已存在');
        } else {
            if(strlen($password)<6){
                echo_js_tips_back('密码不能小于6位');
            }else{
            try {
                $permission = implode(',',$permission);
                $pass = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into tbl_admin (admin_id,admin_name,admin_user,admin_password,admin_permission) values ('','" . $name . "','".$user."','" . $pass . "','" . $permission . "')";
                $_SG['pdo']->execute($sql);
                echo_js_tips_jump('添加成功', '?do=Users&cmd=users');

            } catch (PDOException $e) {
                echo_js_tips_back('添加失败');
            }
            }
        }
        break;
}
function users()
{
    global $_SG;
    $sql = "select * from tbl_admin where is_delete = '0'";
    $row = $_SG['pdo']->query($sql);
    $_SG['view']->assign('row', $row);
    $_SG['view']->assign('title', '用户管理');
    $_SG['view']->display($_SG['tpl']);
}

function user_up()
{
    global $_SG;
    $id = $_GET['id'];
    //var_dump($id);
    $sql = "select * from tbl_admin where admin_id='" . $id . "' limit 1";
    $list = $_SG['pdo']->find($sql);
    $data = $list['admin_permission'];
    $list['admin_permission'] = explode(',',$data);
    $_SG['view']->assign('list', $list);


    $sql = "select * from `tbl_permissions_menu` where is_delete = '0'AND fid = '0' order by type desc,id desc";
    $row = $_SG['pdo']->query($sql);
    $_SG['view']->assign('row', $row);

    //var_dump($row['admin_name']);
    $_SG['view']->assign('title', '修改用户页面');
    $_SG['view']->display($_SG['tpl']);
}

function user_del($id)
{
    global $_SG;
    if (!is_id($id)) {
        echo_js_tips_back('缺少必要参数');
    }
    try {
        $sql = "update tbl_admin set is_delete = '1' where admin_id='" . $id . "'";
        $_SG['pdo']->execute($sql);
        echo_js_tips_jump('删除成功', '?do=Users&cmd=users');
    } catch (PDOException $e) {
        echo_js_tips_back('系统异常');
    }
}

function user_new()
{
    global $_SG;
    $sql = "select * from `tbl_permissions_menu` where is_delete = '0'AND fid = '0' order by type desc,id desc";
    $row = $_SG['pdo']->query($sql);
    $_SG['view']->assign('row', $row);
    $_SG['view']->assign('title', '新增用户');
    $_SG['view']->display($_SG['tpl']);
}

