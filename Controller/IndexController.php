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
        $this->dbModel = new IndexModel();
    }

    public function index()
    {
        if (!isset($this->page))
            $this->page = 0;

        if (!isset($this->size))
            $this->size = 5;

        $model_list = $this->dbModel->get($this->page, $this->size);
        //debug_print_arr($model_list);

        $this->smarty->assign('aa', '标题111');
        $this->smarty->assign('model_list', $model_list);
        $this->smarty->display('index.tpl');
    }

}