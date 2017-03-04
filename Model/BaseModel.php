<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:24 PM
 */

namespace App\Model;


class BaseModel
{
    protected $oDb;

    public function __construct()
    {
        $this->oDb = new \App\Engine\Db;
    }
}