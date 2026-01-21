<?php

require_once 'UserCrud.php';


class LoginController
{
    private $email;
    private $password;
    private $userCrud;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->userCrud = new UserCrud();
    }

    public function processLogin()
    {
        $user = $this->userCrud->getUserByEmail($this->email);

        if (!$user) {
            header("Location: login.php?error=user_not_found");
            exit();
        }

        if (!password_verify($this->password, $user['password'])){
            header("Location: login.php?error=wrong_password");
            exit();
        }


        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_role'] = $user['role'];


        header("Location: dashboard.php");
        exit();
    }
}
