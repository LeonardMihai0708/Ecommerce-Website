<?php

include_once "../includes/dbs.inc.php";
session_start();

class newsletter_add{

    private $email;
    private $conn;
    private $verificare;
    private $verificare_sql;
    private $verificare_sql_TAB;

    public function __construct($email, $conn)
    {
        $this->email = $email;
        $this->conn = $conn;
    }

    public function news_add(){
        $nume_pren = $_SESSION['nume_prenume'];
        $email = $_SESSION['email'];
        $this->newsletter = "INSERT INTO newsletter (nume_prenume,email) VALUES ('$nume_pren','$email');";
        mysqli_query($this->conn,$this->newsletter);
        $this->verificare = "SELECT * FROM newsletter where email = '".$this->email."';";
        $this->verificare_sql = mysqli_query($this->conn,$this->verificare);
        $this->verificare_sql_TAB = mysqli_fetch_assoc($this->verificare_sql);
        if($this->verificare_sql_TAB != NULL){
            header('Location: ../account/account.php?prob=1'); 
            exit(); 
        } else {
            header('Location: ../account/account.php?verif=2'); 
            exit();
        }
    }
        
}
