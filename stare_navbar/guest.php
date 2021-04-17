

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
    include_once "parti_navbar/text_piese_dodge.php";
  ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
      include_once "parti_navbar/search_si_pagini.php";
    ?>
    <ul class="navbar-nav text-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="/dodge/includes/login.inc.php" method="POST">
            <input class="form-control mr-sm-3" type="text" placeholder="Email" aria-label="Close" name="email">
            <input class="form-control mr-sm-3" type="password" placeholder="Password" aria-label="Close" name="password">
            <center>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Login</button>
            </center>
          </form>
        </div>
      </li>
      <div>&nbsp;</div><div class="clearfix">&nbsp;</div>
      <li class="nav-item">
          <a class="nav-link nav_link2" href="/dodge/register/register.php">REGISTER</a>
      </li>
    </ul>
    
  </div>
</nav>