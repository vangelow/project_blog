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

    public function delete(int $id) {

        if($this->isPost)
        {
            if($this->model->delete($id)){
                $this->addInfoMessage("Post deleted.");
                $this->redirect("posts");
            }
            else {
                $this->addErrorMessage("Post could not be deleted.");
                $this->redirect("posts");
            }
        }
        else {
            $post = $this->model->getPost($id);
            if(! $post) {
                $this->addErrorMessage("Error: Post does not exist.");
                $this->redirect("posts");

            }
            $this->post = $post;
        }
    }

    public function edit($id) {
        if($this->isPost) {
            $post = $this->model->getPost($id);
            $this->post = $post;
            $title = $_POST['title'];
            $content = $_POST['content'];
            if($this->formValid()){
                $this->model->edit($title, $content, $id);
                $this->addInfoMessage("Новината е променена.");
                $this->redirect('posts');
            }
        }
        else {
            $post = $this->model->getPost($id);
            if(! $post) {
                $this->addErrorMessage("Error: Post does not exist.");
                $this->redirect("posts");

            }
            $this->post = $post;
        }
    }

}