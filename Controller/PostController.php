<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 3:59 PM
 */

namespace App\Controller;

use App\Model\PostModel;

class PostController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->util->getModel('Post');
        $this->oModel = new PostModel();
    }

    /***** Front end *****/
    // Homepage
    public function index()
    {
        $this->util->oPosts = $this->oModel->get(0, 5);

        $this->util->getView('index');
    }

    public function get()
    {
        $this->util->oPost = $this->oModel->getById($this->id);

        $this->util->getView('post');
    }

    /***** For Admin (Back end) *****/
    public function all()
    {
        if (!$this->isLogged()) exit;

        $this->util->posts = $this->oModel->getAll();

        $this->util->getView('index');
    }


    public function add()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['add_submit']))
        {
            if (isset($_POST['title'], $_POST['body']) && mb_strlen($_POST['title']) <= 50) // Allow a maximum of 50 characters
            {
                $aData = array('title' => $_POST['title'], 'body' => $_POST['body'], 'created_date' => date('Y-m-d H:i:s'));

                if ($this->oModel->add($aData))
                    $this->util->sSuccMsg = 'Hurray!! The post has been added.';
                else
                    $this->util->sErrMsg = 'Whoops! An error has occurred! Please try again later.';
            }
            else
            {
                $this->util->sErrMsg = 'All fields are required and the title cannot exceed 50 characters.';
            }
        }

        $this->util->getView('add_post');
    }

    public function edit()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['edit_submit']))
        {
            if (isset($_POST['title'], $_POST['body']))
            {
                $aData = array('post_id' => $this->id, 'title' => $_POST['title'], 'body' => $_POST['body']);

                if ($this->oModel->update($aData))
                    $this->util->sSuccMsg = 'Hurray! The post has been updated.';
                else
                    $this->util->sErrMsg = 'Whoops! An error has occurred! Please try again later';
            }
            else
            {
                $this->util->sErrMsg = 'All fields are required.';
            }
        }

        /* Get the data of the post */
        $this->util->oPost = $this->oModel->getById($this->id);

        $this->util->getView('edit_post');
    }

    public function delete()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['delete']) && $this->oModel->delete($this->id))
            header('Location: ' . ROOT_URL);
        else
            exit('Whoops! Post cannot be deleted.');
    }
}