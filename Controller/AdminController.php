<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 4:44 PM
 */

namespace App\Controller;


class AdminController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        /** Get the Model class in all the controller class **/
        $this->oUtil->getModel('Admin');
        $this->oModel = new \App\Model\AdminModel;
    }

    public function login()
    {
        if ($this->isLogged())
            header('Location: ' . ROOT_URL . '?do=Post.all');

        if (isset($_POST['email'], $_POST['password']))
        {
            if ($this->oModel->login($_POST['email'], $_POST['password']))
            {
                $_SESSION['is_logged'] = 1; // Admin is logged now
                header('Location: ' . ROOT_URL . '?do=Post.all');
                exit;
            }
            else
                $this->oUtil->sErrMsg = 'Incorrect Login!';
        }

        $this->oUtil->getView('login');
    }
}