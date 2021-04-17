<?php

include_once "../includes/dbs.inc.php";
session_start();

class Create_accountp3{

    private $conn;
    private $nume_pren;
    private $psw;
    private $telefon;
    private $data_nasterii;
    private $email;
    private $cont_final;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->name_pren = $_SESSION['nume_prenume_cont_nou'];
        $this->psw = password_hash($_SESSION['password'], PASSWORD_DEFAULT);
        $this->email = $_SESSION['email'];
        $this->telefon = $_SESSION['telefon'];
        $this->data_nasterii = $_SESSION['data_nasterii'];
    }

    public function Createp3(){
        if(isset($_POST['checkbox2'])=="1"){
            $nume_pren = $_SESSION['nume_prenume_cont_nou'];
            $email = $_SESSION['email'];
            $this->newsletter = "INSERT INTO newsletter (nume_prenume,email) VALUES ('$nume_pren','$email');";
            mysqli_query($this->conn,$this->newsletter);
        }
        $this->cont_final = "INSERT INTO conturi (nume_prenume,password,email,telefon,data_nasterii,stare) VALUES ('$this->name_pren', '$this->psw', '$this->email', '$this->telefon', '$this->data_nasterii', '0');";
        mysqli_query($this->conn,$this->cont_final);
        header('Location: ../index.php?cont_facut_cu_succes'); 
        exit();
    }
        
}
