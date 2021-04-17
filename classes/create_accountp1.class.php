<?php

include_once "../includes/dbs.inc.php";
session_start();

class Create_accountp1{

    private $email;
    private $password;
    private $conn;
    private $verificare;
    private $verificare_sql;
    private $verificare_sql_TAB;

    public function __construct($email, $password, $conn)
    {
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
    }

    public function Createp1(){
        $this->verificare = "SELECT * FROM conturi where email = '".$this->email."'";
        $this->verificare_sql = mysqli_query($this->conn,$this->verificare);
        $this->verificare_sql_TAB = mysqli_fetch_assoc($this->verificare_sql);
        if($this->verificare_sql_TAB != NULL){
            header('Location: '.$_SERVER['HTTP_REFERER'].'?problema=1'); 
            exit(); 
        } else {
            $_SESSION['email'] = $this->email;
            $_SESSION['password'] = $this->password;
            $_SESSION['verificare'] = 'pasul1_verificat';
            header('Location: ../register/register.php?pas=2'); 
            exit();
        }
    }
        
}
