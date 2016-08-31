<?php

class HomeController extends BaseController
{
    function index() {
        $posts = $this->model->getLatestPosts(5);
        $this->posts = array_slice($posts, 0, 3);
        $this->postsSidebar = $posts;
    }
	
	function view($id) {
        $this->authorize();
       $post = $this->model->getPost($id);
        $this->post = $post;
        $this->comments = $this->model->getAllComments();
        if ($this->isPost) {
            $comment = $_POST['comment'];

            if ($this->formValid()) {
                
                $userID = $_SESSION['user_id'];
                $postID = $this->post['post_id'];

                if($this->model->comments($comment, $userID, $postID)) {

                    $this->addInfoMessage("Comment created.");
                    

                }
                else {
                    $this->addErrorMessage("Failed");
                }

            }
        }

    }
}

