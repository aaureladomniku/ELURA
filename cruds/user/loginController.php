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
        
        session_start();
        
        $user = $this->userCrud->getUserByEmail($this->email);

       if (!$user || !password_verify($this->password, $user['password'])) {
    
    $_SESSION['login_error'] = "Wrong email or password.";
    header("Location: ../../html/log-in.php");
    exit();
}



        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_role'] = $user['role'];


        
if ($user['role'] === 'admin') {
    header("Location: ../../html/Dashboard.php");
    exit();
} else {
    header("Location: ../../html/Home.php");
    exit();
}


    }
}
