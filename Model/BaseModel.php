<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:24 PM
 */

namespace App\Model;

use App\Engine\Db;

class BaseModel
{
    protected $oDb;

    public function __construct()
    {
        $this->oDb = new Db();
    }
}