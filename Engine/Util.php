<?php

namespace App\Engine;

class Util
{
    public function getView($sViewName)
    {
        $this->_get($sViewName, 'View');
    }

    public function getModel($sModelName)
    {
        $this->_get($sModelName . 'Model', 'Model');
    }

    /**
     * 统一获取 View 和 Model
     */
    private function _get($sFileName, $sType)
    {
        $sFullPath = ROOT_PATH . $sType . '/' . $sFileName . '.php';
        if (is_file($sFullPath))
            require $sFullPath;
        else
            exit('路径 "' . $sFullPath . '" 下的文件不存在');
    }

    /**
     * 设置模板变量
     * @param $sKey
     * @param $mVal
     */
    public function __set($sKey, $mVal)
    {
        $this->$sKey = $mVal;
    }

}
