<?php

namespace App\Engine;

require_once __DIR__ . '/Pattern/Base.trait.php';
require_once __DIR__ . '/Pattern/Singleton.trait.php';

use \App\Engine\Pattern\Singleton;

class Loader
{

    use Singleton;

    public function init()
    {
        // 动态注册加载类
        spl_autoload_register(array(__CLASS__, '_loadClasses'));
    }

    private function _loadClasses($sClass)
    {
        // 删除命名空间和反斜杠
        $sClass = str_replace(array(__NAMESPACE__, 'App', '\\'), '/', $sClass);

        if (is_file(__DIR__ . '/' . $sClass . '.php')){
            require_once __DIR__ . '/' . $sClass . '.php';
        }

        if (is_file(ROOT_PATH . $sClass . '.php')){
            require_once ROOT_PATH . $sClass . '.php';
        }

    }

}
