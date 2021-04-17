<?php
include_once "dbs.inc.php";
include "autoloader.php";

if(isset($_POST['submit_2'])){
    $register = new newsletter_delete($conn);
    $register->news_dell();
}else {
    exit();
}

?>