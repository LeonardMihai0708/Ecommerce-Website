<?php

include_once "dbs.inc.php";
include "autoloader.php";


if(isset($_POST['submit'])){
    $register = new Create_accountp3($conn);
    $register->Createp3();
}else {
    exit();
}