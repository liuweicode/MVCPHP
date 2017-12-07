<?php

namespace App\Engine;

class Router
{
    public static function run (array $aParams)
    {
        $sNamespace = 'App\Controller\\';
        $sDefCtrl = $sNamespace . 'IndexController';
        $sCtrlPath = ROOT_PATH . 'Controller/';
        $sCtrl = ucfirst($aParams['ctrl']);

        if (is_file($sCtrlPath . $sCtrl . 'Controller.php'))
        {
            $sCtrl = $sNamespace . $sCtrl . 'Controller';

            $oCtrl = new $sCtrl;

            if ((new \ReflectionClass($oCtrl))->hasMethod($aParams['act']) && (new \ReflectionMethod($oCtrl, $aParams['act']))->isPublic())
                call_user_func(array($oCtrl, $aParams['act']), array());
            else
                call_user_func(array($oCtrl, 'notFound'));
        }
        else
        {
            call_user_func(array(new $sDefCtrl, 'notFound'));
        }
    }

}
