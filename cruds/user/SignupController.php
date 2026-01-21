<?php

include_once '../SQL/DbConnection.php';
include_once 'user.php';
include_once 'UsersClass.php';


class SignupController
{

    private $name;
    private $email;
    private $password;
    private $userCrud;

    public function __construct($name, $email, $password)
    {

        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        $this->userCrud = new UserCrud();
    }

    public function processSignup()
    {
        if ($this->userCrud->getUserByEmail($this->email)) {
            header("Location: signup.php?error=email_exists");
            exit();
        }

        $this->userCrud->createUser($this->name, $this->email, $this->password);
        header("Location: signup.php?success=1");
        exit();
    }
}
