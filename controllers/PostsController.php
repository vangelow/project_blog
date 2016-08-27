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
            $userId = $_SESSION['ID'];
            if($this->model->create($title, $content, $userId))
            {
                $this->addInfoMessage("Post created");
                $this->redirect("");
            }

        }
    }

}

}

