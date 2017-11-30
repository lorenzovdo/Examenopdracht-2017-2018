<?php
    include("header.php");
    
	//var_dump($result);	

?>

    <h3>Mijn account wijzigen</h3>

    <br><br>
<?php
/*--------------------------------------------------------------------PATIENT----------------------------------------------------------------*/
    if($_POST['btn'] == 'patient'){
        echo "<div class='row'>
                    <form action='mijnaccount_wijzigen_database.php' method='post'>
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Voornaam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='voornaam' value='".$_SESSION['voornaam']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Tussenvoegsel: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='tussenvoegsel' value='".$_SESSION['tussenvoegsel']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Achternaam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='achternaam' value='".$_SESSION['achternaam']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Woonplaats: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='woonplaats' value='".$_SESSION['woonplaats']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Straat: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='straat' value='".$_SESSION['straat']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Huisnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='huisnummer' value='".$_SESSION['huisnummer']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Postcode: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='postcode' value='".$_SESSION['postcode']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Telefoonnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='telefoonnummer' value='".$_SESSION['telefoonnummer']."'>
                        </div>

                        <br>
                        <button type='submit' class='btn login_btn' name='Btn' value='patient'>Wijziging oplsaan</button>
                    </form>
                        <br>
                        <a href='mijnaccount_wijzigen_wachtwoord.php' class='btn login_btn'>Wijzig wachtwoord</a>
                </div>
                    </div>";
    }

/*--------------------------------------------------------------------HUISARTS----------------------------------------------------------------*/
    elseif($_POST['btn'] == 'huisarts'){
        echo "<div class='row'>
                    <form action='mijnaccount_wijzigen_database.php' method='post'>
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Tussenvoegsel: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='tussenvoegsel' value='".$_SESSION['tussenvoegsel']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Achternaam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='achternaam' value='".$_SESSION['achternaam']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Telefoonnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='telefoonnummer' value='".$_SESSION['telefoonnummer']."'>
                        </div>

                        <br>
                        <button type='submit' class='btn login_btn' name='Btn' value='huisarts'>Wijziging oplsaan</button>
                    </form>
                        <br>
                        <a href='mijnaccount_wijzigen_wachtwoord.php' class='btn login_btn'>Wijzig wachtwoord</a>
                </div>
                    </div>";
    }

/*--------------------------------------------------------------------APOTHEKER----------------------------------------------------------------*/    
elseif($_POST['btn'] == 'apotheker'){
        echo "<div class='row'>
                    <form action='mijnaccount_wijzigen_database.php' method='post'>
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Naam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='naam' value='".$_SESSION['naam']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Woonplaats: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='woonplaats' value='".$_SESSION['woonplaats']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Straat: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='straat' value='".$_SESSION['straat']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Huisnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='huisnummer' value='".$_SESSION['huisnummer']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Postcode: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='postcode' value='".$_SESSION['postcode']."'>
                        </div>

                        <br>
                        
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Telefoonnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='telefoonnummer' value='".$_SESSION['telefoonnummer']."'>
                        </div>

                        <br>
                        <button type='submit' class='btn login_btn' name='Btn' value='apotheker'>Wijziging oplsaan</button>
                    </form>
                        <br>
                        <a href='mijnaccount_wijzigen_wachtwoord.php' class='btn login_btn'>Wijzig wachtwoord</a>
                </div>
                    </div>";
    }

/*--------------------------------------------------------------------BEZORGER----------------------------------------------------------------*/
elseif($_POST['btn'] == 'bezorger'){
        echo "<div class='row'>
                    <form action='mijnaccount_wijzigen_database.php' method='post'>
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Voornaam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='voornaam' value='".$_SESSION['voornaam']."'>
                        </div>

                        <br>
                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Tussenvoegsel: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='tussenvoegsel' value='".$_SESSION['tussenvoegsel']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Achternaam: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='achternaam' value='".$_SESSION['achternaam']."'>
                        </div>

                        <br>

                        <div class='text-nowrap row'>
                            <label class='col-lg-2 col-xs-5'>Telefoonnummer: </label>
                            <input type='text' class='col-lg-2 col-xs-5' name='telefoonnummer' value='".$_SESSION['telefoonnummer']."'>
                        </div>

                        <br>
                        <button type='submit' class='btn login_btn' name='Btn' value='bezorger'>Wijziging oplsaan</button>
                    </form>
                        <br>
                        <a href='mijnaccount_wijzigen_wachtwoord.php' class='btn login_btn'>Wijzig wachtwoord</a>
                </div>
                    </div>";
    }


include("footer.php");

?>
