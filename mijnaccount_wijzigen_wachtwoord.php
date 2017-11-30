    <?php
    include("header.php");
    
	//var_dump($result);	

?>

    <h3>Mijn account wijzig wachtwoord</h3>

    <br><br>
    <div class="row">
        <form action="mijnaccount_wijzigen_wachtwoord_database.php" method='post'>
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Oude wachtwoord: </label>
                <input type='password' class='col-lg-2 col-xs-5' name='oude_ww'>
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Nieuwe wachtwoord: </label>
                <input type='password' class='col-lg-2 col-xs-5' name='nieuwe_ww'>
            </div>
            
            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>nogmaals wachtewoord: </label>
                <input type='password' class='col-lg-2 col-xs-5' name='nogmaals_ww'>
            </div>

            <br>
            <button type="submit" class="btn login_btn">Wijziging oplsaan</button>
        </form>
    </div>
        </div>
<?php
include("footer.php");

?>
