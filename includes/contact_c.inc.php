<?php
include_once "dbs.inc.php";
include "autoloader.php";
session_start();

if(isset($_POST['submit'])){
    $subiect = $_POST['subiect'];
    $mesaj = $_POST['mesaj'];
    $nume_prenume = $_SESSION['nume_prenume'];
    $telefon = $_SESSION['telefon'];
    $email = $_SESSION['email'];
    $msg = new Mesaj($nume_prenume,$email,$telefon,$mesaj,$subiect,$conn);
    $msg->msg();
}else {
    exit();
}

