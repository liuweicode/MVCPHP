<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:22 PM
 */

namespace App\Controller;

use App\Model\IndexModel;

class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->util->getModel('Index');
        $this->oModel = new IndexModel();
    }

    public function index()
    {
        if (!isset($this->page))
            $this->page = 0;

        if (!isset($this->size))
            $this->size = 5;

        $this->util->posts = $this->oModel->get($this->page, $this->size);

        $this->util->getView('index');
    }

}