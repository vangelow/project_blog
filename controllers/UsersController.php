<?php

class UsersController extends BaseController
{
    public function register()
    {
        if($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $confirm_password = $_POST['password_confirm'];
            if($password!=$confirm_password){
                $this->addErrorMessage("Passwords do not match.");
                return;


            }

            $userId = $this->model->register($username, $password, $full_name);
            if ($userId) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
                $this->addInfoMessage("Registration succesful. You have been logged in.");
                $this->redirect("");


        }
            else{
                $this->addErrorMessage("Registration failed.");
            }

        }

    }

    public function login()
    {
		if($this->isPost){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            $userID = $this->model->login($username, $password);
            if($userID)
            {

                $_SESSION['username'] = $username;
                $_SESSION['ID'] = $userID;


                $this->addInfoMessage("Login succesful.");
                $this->redirect("");

            }
            else {
                $this->addErrorMessage("Login failed.");
            }
            

        }
    }

    public function logout()
    {
		session_destroy();
        $this->redirect("");
    }
}
