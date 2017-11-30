<?php
    include("db_connect.php");
    include("header.php");

        if($_SESSION){
            if($_SESSION['rol'] == 'Huisarts'){
            echo"<div class='row'>  
                    <h4>Welkom Huisarts. u bent nu ingelogd als huisarts op de website</h4> 
                </div>";
            }
            elseif($_SESSION['rol'] == 'Apotheker'){
                echo"<div class='row'>  
                    <h4>Welkom Apotheek. u bent nu ingelogd als apotheek op de website</h4> 
              </div>";
            }
            elseif($_SESSION['rol'] == 'Patient'){
                echo"<div class='row'>  
                    <h4>Welkom Patiënt. u bent nu ingelogd als patiënt op de website</h4> 
              </div>";
            }
            elseif($_SESSION['rol'] == 'Bezorger'){
                echo"<div class='row'>  
                    <h4>Welkom Bezorger. u bent nu ingelogd als bezorger op de website</h4> 
              </div>";
            }
            elseif($_SESSION['rol'] == 'Admin'){
                echo"<div class='row'>  
                    <h4>Welkom Admin. u bent nu ingelogd als admin op de website</h4> 
              </div>";
            }
            elseif($_SESSION['rol'] == NULL){
                echo"<div class='row'>  
                    <h4>Welkom bij de wesite van de huisartsendiensten in Amsterdam-zuidoost. Op deze pagina kunt u de datum en tijd van een bestelling wijzigen.</h4> 
              </div>";
            }
        }
        else{
            echo"<div class='row'>  
                    <h4>Welkom bij de wesite van de huisartsendiensten in Amsterdam-zuidoost. Op deze pagina kunt u de datum en tijd van een bestelling wijzigen.</h4> 
              </div>";
        }
?>
        </div>
<?php      
    include("footer.php");
?>