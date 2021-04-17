

<div>&nbsp;</div><div class="clearfix">&nbsp;</div>

<div class="container col-md-10">
  <div class="row">
    <?php
        if(isset($_GET['pas'])){
            if($_GET['pas']==1){
                include_once 'pasi/pasul1.php';
            } else if($_GET['pas']==2 && $_SESSION['verificare'] == 'pasul1_verificat'){
                include_once 'pasi/pasul2.php';
            } else if($_GET['pas']==3 && $_SESSION['verificare2'] == 'pasul2_verificat'){
                include_once 'pasi/pasul3.php';
            }
        } else{
            include_once 'pasi/pasul1.php';
        }
    ?>
</div>