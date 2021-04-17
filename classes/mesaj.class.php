<?php

include_once "../includes/dbs.inc.php";
session_start();

class Mesaj{
    private $email;
    private $subiect;
    private $mesaj;
    private $nume_prenume;
    private $telefon;
    private $conn;
    private $cod;
    public function __construct($nume_prenume,$email,$telefon,$subiect,$mesaj,$conn){
        $this->nume_prenume = $nume_prenume;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->subiect = $subiect;
        $this->mesaj = $mesaj;
        $this->conn = $conn;
    }
    public function msg(){
        $this->cod = "INSERT INTO mesaje (nume_prenume,email,telefon,mesaj,subiect) VALUES ('$this->nume_prenume', '$this->email', '$this->telefon', '$this->mesaj', '$this->subiect')";
        mysqli_query($this->conn,$this->cod);
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER'].'?messaj=succes');
            exit;
           } else {
            header('Location: ../index.php?mesaj=probleme');  
           }
        exit();
    }

}
