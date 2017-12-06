<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:12 PM
 */

namespace App\Controller;

use \App\Engine\Util;

class BaseController
{
    protected $util, $oModel;

    public function __construct()
    {
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();

        $this->util = new Util();

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
        $this->$name = urldecode($value);
    }

    public function __get($name) {
        if(!isset($this->$name) || empty($name)) {
            echo "参数错误" . __FILE__ . " : ". __LINE__;
//            exit();
        }
        return $this->$name;
    }

    public function notFound()
    {
        $this->util->getView('not_found');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}