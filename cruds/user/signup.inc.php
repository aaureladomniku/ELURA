<?php


if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


//instancimi o controllerit te signup-iy

include_once 'UsersClass.php';
include_once '../SQL/DbConnection.php';
include_once 'SignupController.php';


$signup=new SignupController($name,$email,$password);

}