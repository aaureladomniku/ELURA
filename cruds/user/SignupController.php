<?php
include_once __DIR__ . '/../../SQL/DbConnection.php';
include_once 'user.php';
include_once 'UserCrud.php';


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
            header("Location: ../../html/log-in.php");
            exit();
        }

        $this->userCrud->createUser($this->name, $this->email, $this->password);
        header("Location: ../../html/log-in.php");
        exit();
    }
}
