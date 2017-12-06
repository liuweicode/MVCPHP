<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 1:58 PM
 */

namespace App;
use App\Engine as E;

error_reporting(E_ALL);
ini_set('display_errors', '1');
header("charset=utf-8");

if (version_compare(PHP_VERSION, '5.5.0', '<'))
    exit('你的PHP版本是 ' . PHP_VERSION . '. 此程序运行需要 PHP 5.5 或更高版本.');
if (!extension_loaded('mbstring'))
    exit('请安装"mbstring"扩展.');

// 设置全局常量
define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('ROOT_URL', PROT . $_SERVER['HTTP_HOST']);
define('ROOT_PATH', __DIR__ . '/');

try
{
    require ROOT_PATH . 'Engine/Loader.php';
    E\Loader::getInstance()->init(); // 加载所需的类

    $action = !empty($_GET['do']) ? $_GET['do'] : 'Index.index';
    list($ctrl, $act)  = explode('.',$action);

    $aParams = ['ctrl' => $ctrl, 'act' => $act]; // I use the new PHP 5.4 short array syntax
    E\Router::run($aParams);
}
catch (\Exception $oE)
{
    echo $oE->getMessage();
}
