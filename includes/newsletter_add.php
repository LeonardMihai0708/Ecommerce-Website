<?php
include_once "dbs.inc.php";
include "autoloader.php";

if(isset($_POST['submit_1'])){
    $email = mysqli_real_escape_string($conn,$_SESSION['email']);
    $register = new newsletter_add($email, $conn);
    $register->news_add();
}else {
    exit();
}

?>