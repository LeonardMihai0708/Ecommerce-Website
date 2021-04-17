<?php

include_once "dbs.inc.php";
include "autoloader.php";


if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $register = new Create_accountp1($email, $password, $conn);
    $register->Createp1();
}else {
    exit();
}