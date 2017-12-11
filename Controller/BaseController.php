<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:12 PM
 */

namespace App\Controller;

use App\Engine\Config;
use \App\Engine\Util;

class BaseController
{
    protected $dbModel;

    protected $smarty;

    public function __construct()
    {
        // 开启 Session
        if (empty($_SESSION))
            @session_start();

        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir(ROOT_PATH . '/view'); //设置模板目录
        $this->smarty->setCompileDir(ROOT_PATH . '/view_c');
        $this->smarty->setCacheDir(ROOT_PATH . '/cache/view');
        $this->smarty->left_delimiter = "{#";
        $this->smarty->right_delimiter = "#}";

        if (Config::APP_DEBUG)
        {
            $this->smarty->caching = false;
            $this->smarty->cache_lifetime = 0;
        }else{
            $this->smarty->caching = true;
            $this->smarty->cache_lifetime = 120;
        }

        foreach($_COOKIE as $key => $value){
            $this->__set($key, $value);
        }

        foreach($_POST as $key => $value){
            $this->__set($key, $value);
        }

        foreach($_GET as $key => $value){
            $this->__set($key, $value);
        }
    }

    public function __set($name, $value) {
        if (!isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name) {
        if(!isset($this->$name) || empty($name)) {
            echo "<pre>";
            debug_print_backtrace();
            exit();
        }
        return $this->$name;
    }

    public function notFound()
    {
        $this->smarty->assign('title', '页面未找到');
        $this->smarty->assign('msg', '页面未找到');
        $this->smarty->display('404.tpl');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}