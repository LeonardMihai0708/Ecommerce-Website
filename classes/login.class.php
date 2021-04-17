<?php

include_once "../includes/dbs.inc.php";
session_start();

class Login{

    private $email;
    private $password;
    private $codul;
    private $rezultat;
    private $rezultat_final;
    private $conn;
    private $hashedPwdInDB;

    public function __construct($username, $password, $conn)
    {
        $this->email = $username;
        $this->password = $password;
        $this->conn = $conn;
    }

    public function conectare_cont(){
        $this->hashedPwdInDB = password_hash($this->password, PASSWORD_DEFAULT);
        if(password_verify($this->password, $this->hashedPwdInDB) == 1){
            $this->codul = "Select * from conturi where email='$this->email'";
            $this->rezultat = mysqli_query($this->conn,$this->codul);
            $this->rezultat_final = mysqli_fetch_assoc($this->rezultat);
            if($this->rezultat_final != NULL){
                $_SESSION['email']=$this->email;
                $_SESSION['stare'] = $this->rezultat_final['stare'];
                $_SESSION['nume_prenume'] = $this->rezultat_final['nume_prenume'];
                $_SESSION['telefon']=$this->rezultat_final['telefon'];  
                if(isset($_SERVER['HTTP_REFERER'])) {
                    header('Location: '.$_SERVER['HTTP_REFERER']); 
                    exit(); 
                } else {
                    header('Location: ../index.php');  
                    exit();
                }
                exit();
            } else{
                if(isset($_SERVER['HTTP_REFERER'])) {
                    header('Location: '.$_SERVER['HTTP_REFERER']);  
                    exit();
                } else {
                    header('Location: ../index.php');  
                    exit();
                }
                exit();
            }
        }
        }
}
