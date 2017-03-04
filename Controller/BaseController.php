<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:12 PM
 */

namespace App\Controller;


class BaseController
{
    protected $oUtil, $oModel;

    public function __construct()
    {
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();

        $this->oUtil = new \App\Engine\Util;
    }

    public function notFound()
    {
        $this->oUtil->getView('not_found');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}