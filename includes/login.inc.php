<?php

include_once "dbs.inc.php";
include "autoloader.php";


if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $login = new Login($email, $password, $conn);
    $login->conectare_cont();
}else {
    exit();
}