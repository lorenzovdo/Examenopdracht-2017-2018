<?php 
    include("db_connect.php");
    include("header.php");
?>
            <h4 class="col-lg-12 col-xs-12">Inloggen - Patiënt</h4>
              <div class="row">
                  <form action="inlog_database.php" method='post'>
                        <div class="row">
                            <div class="text-nowrap row">
                                <label class='col-lg-2 col-xs-6'>Verzekeringsnummer</label>
                                <input type="text" name="vzknr" class="col-lg-2 col-xs-5" placeholder="Uw verzekeringsnummer">
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-nowrap row">
                                <label class='col-lg-2 col-xs-6'>Email</label>
                                <input type="email" name="email" class="col-lg-2 col-xs-5" placeholder="Uw email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-nowrap row">
                                <label class='col-lg-2 col-xs-6'>Geborrtedatum</label>
                                <input type="date" name="geboortedatum" class="col-lg-2 col-xs-5" placeholder="Uw geboortedatum">
                            </div>
                        </div>
                      <button type="submit" class="btn login_btn" name="Btn" value="patient">log in</button>
                    </form>
                </div>



            <a href="medewerker_inlog.php">Geen patiënt. Klik hier</a>
          </div>
<?php
    include("footer.php");
?>