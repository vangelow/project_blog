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
    
}

}

