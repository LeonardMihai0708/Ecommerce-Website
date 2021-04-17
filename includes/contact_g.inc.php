<?php
include_once "dbs.inc.php";
include "autoloader.php";
session_start();

if(isset($_POST['submit'])){
    $subiect = $_POST['subiect'];
    $mesaj = $_POST['mesaj'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $nume_prenume = $nume.' '.$prenume;
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $msg = new Mesaj($nume_prenume,$email,$telefon,$mesaj,$subiect,$conn);
    $msg->msg();
}else {
    exit();
}

