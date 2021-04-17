
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/dodge/index.php">
    <span class="paragraf1">PIESE</span>
    <span class="paragraf2">DODGE</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
      include_once "parti_navbar/search_si_pagini.php";
    ?>
    <ul class="navbar-nav text-right">
      <?php
        if($_SESSION['stare']==1){
          echo '
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION['nume_prenume'].'
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <center>';
          if (stripos($_SERVER['REQUEST_URI'], 'account.php')){
            echo '
              <a class="dropdown-item" href="../index.php">Home</a>
            ';
          } else if(stripos($_SERVER['REQUEST_URI'], 'contact.php')){
            echo '
            <a class="dropdown-item" href="../account/account.php">Contul Meu</a>
            '; 
          } else{
              echo '
              <a class="dropdown-item" href="account/account.php">Contul Meu</a>
              '; 
          }
          echo'
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mesaje Noi</a>
                <a class="dropdown-item" href="#">Stoc</a>
                <a class="dropdown-item" href="#">Angajati</a>
              </center>
            </div>
          </li>
          ';
          }
        else{
          echo '
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION['nume_prenume'].'
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <center>';
            if (stripos($_SERVER['REQUEST_URI'], 'account.php')){
              echo '
                <a class="dropdown-item" href="../index.php">Home</a>
              ';
            } else if(stripos($_SERVER['REQUEST_URI'], 'contact.php')){
              echo '
              <a class="dropdown-item" href="../account/account.php">Contul Meu</a>
              '; 
            } else{
                echo '
                <a class="dropdown-item" href="account/account.php">Contul Meu</a>
                '; 
            }
          echo'
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mesaje Noi</a>
                <a class="dropdown-item" href="#">Angajati</a>
              </center>
            </div>
          </li>
          ';
          }
      ?>
      <li class="nav-item nav-item1">
        <form action="/dodge/includes/delogare.inc.php" method="POST" onclick="return confirm('Esti sigur că dorești sa iesi din cont?');">
          <button type="submit" name="submit">Logout</button>
        </form>
      </li>
    </ul>
    
  </div>
</nav>