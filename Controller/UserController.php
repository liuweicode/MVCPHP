<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:28 PM
 */

namespace App\Controller;


class UserController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        /** Get the Model class in all the controller class **/
        $this->oUtil->getModel('User');
        $this->oModel = new \App\Model\UserModel;
    }

    public function login()
    {
        if ($this->isLogged())
            header('Location: ' . ROOT_URL . '?p=Index&a=all');

        if (isset($_POST['email'], $_POST['password']))
        {
            if ($this->oModel->login($_POST['email'], $_POST['password']))
            {
                $_SESSION['is_logged'] = 1; // Admin is logged now
                header('Location: ' . ROOT_URL . '?p=BaseController&a=all');
                exit;
            }
            else
                $this->oUtil->sErrMsg = 'Incorrect Login!';
        }

        $this->oUtil->getView('login');
    }

    public function logout()
    {
        if (!$this->isLogged()) exit;

        // If there is a session, destroy it to disconnect the admin
        if (!empty($_SESSION))
        {
            $_SESSION = array();
            session_unset();
            session_destroy();
        }

        // Redirect to the homepage
        header('Location: ' . ROOT_URL);
        exit;
    }
}