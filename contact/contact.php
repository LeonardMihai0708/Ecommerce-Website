<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="../img/logo_transparent.png" >
    <title>Piese Dodge</title>
    <link href="../css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/container.css">
    <link rel="stylesheet" href="../continut/css_continut/continut.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>


<?php

  if($_SESSION){
    include_once '../stare_navbar/logged.php';

    echo'
    
    <div class="container">
    
      <form action="../includes/contact_c.inc.php" method="POST" class="col-md-6">
        <label for="fname">Subiect:</label>
        <input type="text" id="fname" name="subiect" placeholder="Subiect..">

        <label for="subject">Mesaj:</label>
        <textarea id="subject" name="mesaj" placeholder="Scrie mesajul tau aici.." style="height:200px"></textarea>

        <input type="submit" value="Submit" name="submit">

      </form>

      <style>
        .container .social_media i{
          font-size: 20px;
          padding: 2px;
          color: rgb(223, 4, 4);
          transition: 0.2s;
      }
      </style>
    ';

      include_once 'social_media.php';

    echo '

      <div>&nbsp;</div><div class="clearfix">&nbsp;</div>

      </div>
    ';

  } else{
    include_once '../stare_navbar/guest.php';

    echo'
    
    <div class="container">
      <form action="../includes/contact_g.inc.php" method="POST" class="col-md-6">

        <label for="fname">Nume:</label>
        <input type="text" id="fname" name="nume" placeholder="Numele Dumneavoastră..">

        <label for="lname">Prenume:</label>
        <input type="text" id="lname" name="prenume" placeholder="Prenumele Dumneavoastră..">
        <br><br>
        <label for="lname">Email:</label>
        <input type="email" id="lname" name="email" placeholder="Email..">
        <br><br>
        <label for="lname">Telefon:</label>
        <input type="tel" id="lname" name="telefon" placeholder="Numărul de telefon..">
        <br><br>
        <label for="subject">Mesaj:</label>
        <textarea id="subject" name="mesaj" placeholder="Mesaj.." style="height:200px"></textarea>

        <label for="subject">Subject:</label>
        <textarea id="subject" name="subiect" placeholder="Subiect.." style="height:200px"></textarea>

        <input type="submit" value="Submit" name="submit">

      </form>

      <style>
        .container .social_media i{
          font-size: 38px;
          padding: 40px;
          color: rgb(223, 4, 4);
          transition: 0.2s;
      }
      </style>

      ';

      include_once 'social_media.php';

    echo '

      <div>&nbsp;</div><div class="clearfix">&nbsp;</div>

    </div>
    ';

  }
?>

<div>&nbsp;</div><div class="clearfix">&nbsp;</div>
<center>
  <img src="../img/logo_transparent.png" alt="Logo" style="height: 100px; width:100px;">
  <p>&copy; 2020 Mihai Leonard. All rights reserved. &copy;</p>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>