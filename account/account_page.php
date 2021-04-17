<div>&nbsp;</div><div class="clearfix">&nbsp;</div>

<div class="container col-lg-11">
    <h3>
        Bine ai venit <?php echo $_SESSION['nume_prenume']; ?>!
    </h3>
    <div>&nbsp;</div><div class="clearfix">&nbsp;</div>
    <div class="email_conf">
        <h6>Adresa dumneavoastră:</h6>
        <p>
            <?php echo $_SESSION['email']; ?>
        </p>
    </div>
    <?php
    switch (isset($_POST['verif'])) {
        case 1:
            echo '
            <h6>V-ati dezabonat de la newsletter!</h6>
            ';
            break;
        case 2:
            echo '
            <h6>V-ati abonat cu succes la newsletter!</h6>
            ';
            break;
    }
    if(isset($_POST['prob'])==1) {
        echo '
        <h6>A aparut o eroare la server, vă rugăm să mai incercați încă o data!</h6>
        ';
    }
    include_once "../includes/dbs.inc.php";
    $news_conn = "SELECT * FROM newsletter where email = '".$_SESSION['email']."'";
    $news_conn_ver = mysqli_query($conn,$news_conn);
    $news_conn_tab = mysqli_fetch_assoc($news_conn_ver);
    if($news_conn_tab == NULL){
        echo'
        <form action="../includes/newsletter_add.php" method="POST" class="newsletter_conf col-md-12">
            <i class="fas fa-envelope"></i><p>&nbsp;&nbsp;Newsletter</p><br>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="1" name="checkbox2" required>
                    <h6>Doriți să primiți mesaje legate despre noile promoții sau produse adăugate recent în stoc.</h6>
                </label>
            </div>
            <button type="submit" name="submit_1" class="btn btn-primary">Vreau să ma abonez la newsletter!</button>
        </form>
        <div>&nbsp;</div><div class="clearfix">&nbsp;</div>
        ';
    } else{
        echo '
        
        <form action="../includes/newsletter_delete.php" method="POST" class="newsletter_conf col-md-12">
            <i class="fas fa-envelope"></i><p>&nbsp;&nbsp;Newsletter</p><br>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="1" name="checkbox3" required>
                    <h6>Doriti să vă dezabonați de la newsletter?</h6>
                </label>
            </div>
            <button type="submit" name="submit_2" class="btn btn-primary btn_2">Nu doresc să mai fiu la curent cu ultimile noutăți și oferte</button>
        </form>
        <div>&nbsp;</div><div class="clearfix">&nbsp;</div>
        <div>&nbsp;</div><div class="clearfix">&nbsp;</div>
        
        ';
    }

    ?>
    <form action="account.php?conf=1" method="POST" class="psw_conf col-md-12">
        <i class="fas fa-unlock-alt"></i><h4>&nbsp;&nbsp;Schimbare Parolă:</h4><br>
        <input type="password" name="parola_curenta" placeholder="Parola curentă" id="psw1" required><input type="checkbox" onclick="myFunction1()"><p>Arată parola</p><br>
        <input type="password" name="parola_curenta" placeholder="Parola nouă" id="psw2" required><input type="checkbox" onclick="myFunction2()"><p>Arată parola</p><br>
        <input type="password" name="parola_curenta" placeholder="Introduceți din nou parola" id="psw3" required><input type="checkbox" onclick="myFunction3()"><p>Arată parola</p><br>
        <button type="submit" name="submit_email" class="btn btn-primary">Salvează</button>
        <script src="js/psw.js"></script>
    </form>
</div>

<div>&nbsp;</div><div class="clearfix">&nbsp;</div>

<center>
  <img src="../img/logo_transparent.png" alt="Logo" style="height: 100px; width:100px;"><br>
  <p>&copy; 2020 Mihai Leonard. All rights reserved. &copy;</p>
</center>