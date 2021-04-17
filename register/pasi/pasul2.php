<div class="col1 col-lg-3">
        <center>
            <div class="col col-lg-12">
                <p>
                    <i class="fas fa-circle-notch"></i> PASUL 1
                </p>
            </div>
            <hr>
            <div class="col-active col-lg-12">
                <p>
                    <i class="fas fa-circle-notch"></i> PASUL 2
                </p>
            </div>
            <hr>
            <div class="col col-lg-12">
                <p>
                    <i class="fas fa-circle-notch"></i> PASUL 3
                </p>
            </div>
        </center>
    </div>
    <div class="col2 col-md-8">
        <center>
            <h1>CREARE CONT</h1>
            <form action="../includes/create_accountp2.php" method="POST">
                <label for="Nume">Nume:</label>
                <input type="text" id="Nume" name="nume" placeholder="Nume.." size="50" required>
                <br>
                <label for="Prenume">Prenume:</label>
                <input type="text" id="Prenume" name="prenume" placeholder="Prenume.." size="50" required>
                <br>
                <label for="Data">Data Nasterii:</label>
                <input type="date" id="Data" name="data" min="
                <?php 
                    $now2 = date('Y');
                    $nowY2 = $now2-100;
                    $then2 = $nowY2."-".date('m-d');
                ?>
                " max="<?php 
                    $now = date('Y');
                    $nowY = $now-18;
                    $then = $nowY."-".date('m-d');
                    echo $then;
                ?>" required>
                <br>
                <label for="Telefon">Telefon:</label>
                <input type="tel" id="Telefon" name="telefon" placeholder="Telefon.." size="50" pattern="^(\+4|)?(07[0-8]{1}[0-9]{1}|02[0-9]{2}|03[0-9]{2}){1}?(\s|\.|\-)?([0-9]{3}(\s|\.|\-|)){2}$" required>
                <br>
                <button type="submit" name="submit">Pasul Următor</button>
            </form>
        </center>
    </div>