<?php

include_once "dbs.inc.php";
include "autoloader.php";


if(isset($_POST['submit'])){
    $nume = mysqli_real_escape_string($conn,$_POST['nume']);
    $prenume = mysqli_real_escape_string($conn,$_POST['prenume']);
    $nume_prenume = $nume.' '.$prenume;
    $data_nasterii = mysqli_real_escape_string($conn,$_POST['data']);
    $telefon = mysqli_real_escape_string($conn,$_POST['telefon']);
    $register = new Create_accountp2($nume_prenume, $data_nasterii, $telefon, $conn);
    $register->Createp2();
}else {
    exit();
}