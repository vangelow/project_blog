<?php

class HomeController extends BaseController
{
    function index() {
        $posts = $this->model->getLatestPosts(5);
        $this->posts = array_slice($posts, 0, 3);
        $this->postsSidebar = $posts;
    }
	
	function view($id) {
        // TODO: Load a post to be displayed here ...
    }
}
