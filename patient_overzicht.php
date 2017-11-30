<?php
    include("header.php");
?>

    <h3>Patiënt overzicht</h3>
    <br><br>
    <div class="row">
        <div class="text-nowrap row">
            <table class='col-lg-11 col-xs-12'>
                <tr>
                    <th>Naam</th>
                    <th>Verzekeringsnr</th>
                    <th>Geboortedatum</th>
                    <th>Telefoonnummer</th>
                    <th>Adres</th>
                    <th>Blocked</th>
                </tr>
                <?php get_patient(); ?>
            </table>
        </div>
    </div>
        </div>
<?php      
    include("footer.php");
?>
