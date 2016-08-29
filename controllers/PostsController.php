<?php

class PostsController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->posts = $this->model->getAllPosts();
    }
public function create ()
{
    if ($this->isPost)
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        if ($this->formValid())
        {
            $userID = $_SESSION['user_id'];
            if($this->model->create($title, $content, $userID))
            {
                $this->addInfoMessage("Post created");
                $this->redirect("");
            }

        }
    }

}

}

