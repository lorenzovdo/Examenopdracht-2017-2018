<?php
    include("header.php");
?>

    <h3>Patiënt aanmaken</h3>
    <br><br>
    <div class="row">
        <form action="patient_aanmaken_database.php" method='post'>
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Voornaam:</label>
                <input class='col-lg-2 col-xs-5' type='text' name='voornaam'>
            </div>

            <br>
            
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
                <label class='col-lg-2 col-xs-5'>Verzekeringsnummer:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="vzknr">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Geboortedatum:</label>
                <input class='col-lg-2 col-xs-5' type="date" name="geboortedatum">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Woonplaats:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="wnplts">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Straat:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="straat">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Huisnummer:</label>
                <input class='col-lg-2 col-xs-5' type="number" name="hsnr">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Postcode:</label>
                <input class='col-lg-2 col-xs-5' type="text" name="postcode">
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Apotheek:</label>
                <select class='col-lg-2 col-xs-5' name="apotheek">
                    <?php get_apotheek(); ?>
                </select>
            </div>

            <br>
            
            <div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>E-mail:</label>
                <input class='col-lg-2 col-xs-5' type="email" name="email">
            </div>
            
            <br>
            
            <!--<div class="text-nowrap row">
                <label class='col-lg-2 col-xs-5'>Allergies voor:</label>
                <?php //get_medicijnen(); ?>
            </div>-->

            <br>
            <button type="submit" class="btn login_btn">Patiënt opslaan</button>
        </form>
    </div>
        </div>
<?php      
    include("footer.php");

function get_medicijnen(){
    global $conn;
    $query = 'select * from medicijnen order by naam';
    $result = mysqli_query($conn, $query);
    //var_dump($result);
    while($record = mysqli_fetch_assoc($result)){
        echo "<label class='nopadding nomargin medicijn_naam' data-toggle='tooltip' title='".$record['types']."--".$record['beschrijving']."'>".$record['naam']."<input name='medicijn[]' value='".$record['id']."' class='checkbox' type='checkbox'></label><br>";
    }
}
?>
