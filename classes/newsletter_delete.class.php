<?php

include_once "../includes/dbs.inc.php";
session_start();

class newsletter_delete{
    private $conn;
    private $verificare;
    private $verificare_sql;
    private $verificare_sql_TAB;
    public $new_sql_del;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function news_dell(){
        $this->new_sql_del = "DELETE FROM newsletter WHERE email='".$_SESSION['email']."'";
        mysqli_query($this->conn,$this->new_sql_del);
        $this->verificare = "SELECT * FROM newsletter WHERE email='".$_SESSION['email']."'";
        $this->verificare_sql = mysqli_query($this->conn,$this->verificare);
        $this->verificare_sql_TAB = mysqli_fetch_assoc($this->verificare_sql);
        if($this->verificare_sql_TAB != NULL){
                header('Location: ../account/account.php?prob=1'); 
                exit(); 
            } else {
                header('Location: ../account/account.php?verif=1'); 
                exit();
            }
    } 
}
