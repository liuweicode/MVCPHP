<?php

function common_db_mysql_connect() {
    global $_SG,$_SC;
    include_once(ABSPATH.'/include/mysql.class.php');
    $_SG['db'] = new dbstuff;
    $_SG['db']->connect($_SC['dbhost'], $_SC['dbuser'], $_SC['dbpw'], $_SC['dbname'], $_SC['pconnect']);
}

function common_db_pdo_connect(){
    global $_SG,$_SC;
    include_once(ABSPATH.'/include/pdo/Lite.class.php');
    $_SG['pdo'] = new Lite($_SC);
}

function daddslashes($string, $force = 0) {
    if(!$GLOBALS['magic_quotes_gpc'] || $force) {
        if(is_array($string)) {
            foreach($string as $key => $val) {
                $string[$key] = daddslashes($val, $force);
            }
        } else {
            $string = addslashes($string);
        }
    }
    return $string;
}



function common_smarty(){
    global $_SG;
    require(ABSPATH.'/include/smarty/Smarty.class.php');
    $_SG['view'] = new Smarty; //建立smarty实例对象$smarty;
    $_SG['view']->template_dir = "./tpl"; //设置模板目录
    $_SG['view']->compile_dir = "./tpl_c"; //设置编译目录
    $_SG['view']->cache_dir = "./cache"; //缓存目录
    $_SG['view']->cache_lifetime = 3; //缓存时间
    $_SG['view']->caching = false; //缓存方式
    $_SG['view']->left_delimiter = "{#";
    $_SG['view']->right_delimiter = "#}";
}

function common_curl_post($url,$data) {
    $ch = curl_init();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10); //timeout on connect
    curl_setopt ( $ch, CURLOPT_TIMEOUT, 10); //timeout on response
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    return $return;
}

function common_curl_get($url) {
    $ch = curl_init();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10); //timeout on connect
    curl_setopt ( $ch, CURLOPT_TIMEOUT, 10); //timeout on response
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    return $return;
}

function common_get_user_ip(){
    static $realIP;
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realIP = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realIP = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realIP = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realIP = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realIP = getenv("HTTP_CLIENT_IP");
        } else {
            $realIP = getenv("REMOTE_ADDR");
        }
    }
    return $realIP;
}

function common_get_randChar($length){
    $str = null;
    $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
    $max = strlen($strPol)-1;

    for($i=0;$i<$length;$i++){
        $str.=$strPol[rand(0,$max)];
    }
    return $str;
}
//输出js提示并且返回
function echo_js_tips_back($str,$muns=1){
    echo "<script>alert('".$str."');window.history.go(-".$muns.")</script>";
    exit;
}
//输出js提示并且跳转
function echo_js_tips_jump($str,$url){
    echo "<script>alert('".$str."');window.location.href='".$url."'</script>";
    exit;
}
//验证id
function is_id($id,$Is_zero=false){
    if($Is_zero){
        if(isset($id) && floor($id) == $id && $id >= 0){
            return true;
        }else{
            return false;
        }
    }else{
        if(isset($id) && floor($id) == $id && $id > 0){
            return true;
        }else{
            return false;
        }
    }

}
//获取控制器名称
function get_controller_name(){
    return (!empty($_GET['do'])) ? $_GET['do']:'index';
}
//获取方法名称
function get_function_name(){
    return (!empty($_GET['cmd'])) ? $_GET['cmd']:'index';
}
//递归给目录权限
function recursiveChmod($path, $filePerm=0777, $dirPerm=0777)
{
    // 检查路径是否存在
    if(!file_exists($path))
    {
        return(FALSE);
    }
    // 是否这是一个文件
    if(is_file($path))
    {
        // Chmod the file with our given filepermissions
        @chmod($path, $filePerm);
        // 如果这是一个目录……
    } elseif(is_dir($path)) {
        // 然后得到一个数组的内容
        $foldersAndFiles = scandir($path);
        // Remove "." and ".." from the list
        $entries = array_slice($foldersAndFiles, 2);
        // 解析每一个结果……
        foreach($entries as $entry)
        {
            // 并再次调用这个函数递归,相同的权限
            recursiveChmod($path."/".$entry, $filePerm, $dirPerm);
        }
        // 当我们完成了该目录的内容,我们修改文件权限的目录本身
        @chmod($path, $dirPerm);
    }
    // Everything seemed to work out well, return TRUE
    return(TRUE);
}

//取首字母大写
function getStrFirstLetter($str){
    $charset=new charset();
    return substr(strtoupper(iconv('gbk','utf-8//IGNORE',strtoupper($charset->PinYin(mb_convert_encoding($str,'gbk','utf-8'))))),0,1);
}
