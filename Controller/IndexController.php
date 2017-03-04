<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:22 PM
 */

namespace App\Controller;


class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        /** Get the Model class in all the controller class **/
        $this->oUtil->getModel('Index');
        $this->oModel = new \App\Model\IndexModel;
    }

    public function index()
    {
        $this->oUtil->oPosts = $this->oModel->get(0, 5);

        $this->oUtil->getView('index');
    }
}