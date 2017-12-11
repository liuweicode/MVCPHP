<?php

namespace App\Engine;

class Router
{
    public static function run ($do, $cmd)
    {
        $sNamespace = 'App\Controller\\';
        $sDefCtrl = $sNamespace . 'IndexController';
        $sCtrlPath = ROOT_PATH . 'Controller/';
        $do = ucfirst($do);

        if (is_file($sCtrlPath . $do . 'Controller.php'))
        {
            $sCtrl = $sNamespace . $do . 'Controller';

            $oCtrl = new $sCtrl;

            if ((new \ReflectionClass($oCtrl))->hasMethod($cmd) && (new \ReflectionMethod($oCtrl, $cmd))->isPublic())
                call_user_func(array($oCtrl, $cmd), array());
            else
                call_user_func(array($oCtrl, 'notFound'));
        }
        else
        {
            call_user_func(array(new $sDefCtrl, 'notFound'));
        }
    }

}
