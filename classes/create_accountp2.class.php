<?php

include_once "../includes/dbs.inc.php";
session_start();

class Create_accountp2{

    private $nume_prenume;
    private $data_nasterii;
    private $telefon;
    private $conn;
    private $verificare;
    private $verificare_sql;
    private $verificare_sql_TAB;

    public function __construct($nume_prenume, $data_nasterii, $telefon, $conn)
    {
        $this->nume_prenume = $nume_prenume;
        $this->data_nasterii = $data_nasterii;
        $this->telefon = $telefon;
        $this->conn = $conn;
    }

    public function Createp2(){
        $_SESSION['nume_prenume_cont_nou'] = $this->nume_prenume;
        $_SESSION['data_nasterii'] = $this->data_nasterii;
        $_SESSION['telefon'] = $this->telefon;
        $_SESSION['verificare2'] = 'pasul2_verificat';
        header('Location: ../register/register.php?pas=3'); 
        exit();
    }
        
}
