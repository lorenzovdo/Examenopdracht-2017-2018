<?php
    include("header.php"); 


    
?>
<form class="col-lg-12" action="bijbestellen_database.php" method="POST">
    <div class="row">
        <h4 class="col-lg-10">Voorraad Bijhouden</h4>
        <button type="submit" class="btn login_btn_default">Bijbestellen</button>
    </div>

    <div class="row">
        <table class="col-lg-12">
            <tr>
                <th>Naam medicijn</th>
                <th>Beschrijving</th>
                <th>Voorraad</th>
                <th>Verzekerd</th>
                <th>Bijbestellen</th>
            </tr>
            <?php 
                get_voorraad_rows(); 
            ?>
        </table>
    </div>
</form>

<?php include("footer.php"); ?>