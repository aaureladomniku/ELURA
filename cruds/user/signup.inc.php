<?php


if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


//instancimi o controllerit te signup-iy

include_once 'user.php';
include_once __DIR__ . '/../../SQL/DbConnection.php';
include_once 'SignupController.php';


$signup=new SignupController($name,$email,$password);

 $signup->processSignup();

}
else{
    header("Location: ../../html/sign-up.php");
    exit();
}