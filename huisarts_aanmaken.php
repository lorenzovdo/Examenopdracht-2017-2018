<?php
    include("header.php");
?>

    <h3>Huisarts aanmaken</h3>
    <br><br>
    <div class="row">
        <form action="huisarts_aanmaken_database.php" method='post'>
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Tussenvoegsel:</label>
                <input class='col-lg-2 col-xs-5' type='text' name='tussenvoegsel'>
            </div>

            <br>

            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Achternaam:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="achternaam">
            </div>

            <br>

            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Telefoonnummer:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="telefoonnummer">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Big-nummer:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="bignr">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>E-mail:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="email">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Huisartsenpost:</label>
                <select class='col-lg-2 col-xs-5' name="post">
                    <?php get_huisartsenpost(); ?>
                </select>
            </div>

            <br>
            <button type="submit" class="btn login_btn">Huisarts opslaan</button>
        </form>
    </div>
        </div>
<?php      
    include("footer.php");
?>
