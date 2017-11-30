<?php 
    session_start();
    //include("API/PHP/php-library.php");
    include("db_connect.php");
    include("API/PHP/php_library.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>De Bijsluiter</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
      <div class="header">
          <nav class="navbar navbar navbar-default">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="./">Home</a>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <?php if(isset($_SESSION["email"])){ echo "<li><a href=\"mijnaccount.php\">Mijn account</a></li>"; } 
                                if(!isset($_SESSION["email"])){ echo "<li><a href=\"inlog.php\">Inloggen</a></li>"; }  
                                if(isset($_SESSION["email"])){ echo "<li><a href=\"logout.php\">Uitloggen</a></li>"; } 
                                if($_SESSION){
                                    if($_SESSION["rol"] == "Patient"){echo "<li><a href=\"bestelling_overzicht.php\">Bestelling overzicht</a></li>"; }
                                    
                                    if($_SESSION["rol"] == "Huisarts"){echo "<li><a href=\"bestelling_overzicht.php\">Bestelling overzicht</a></li>"; }
                                    if($_SESSION["rol"] == "Huisarts"){echo "<li><a href=\"bestelling_maken.php\">Bestelling maken</a></li>"; }
                                    if($_SESSION["rol"] == "Huisarts"){echo "<li><a href=\"Patient_overzicht.php\">Patiënten overzicht</a></li>"; }
                                    if($_SESSION["rol"] == "Huisarts"){echo "<li><a href=\"Patient_aanmaken.php\">Patiënt aanmaken</a></li>"; }
                                    if($_SESSION["rol"] == "Huisarts"){echo "<li><a href=\"Patient_allergieen.php\">Patiënt allergieën</a></li>"; }
                                    
                                    if($_SESSION["rol"] == "Apotheker"){echo "<li><a href=\"huisarts_aanmaken.php\">Huisarts aanmaken</a></li>"; }
                                    if($_SESSION["rol"] == "Apotheker"){echo "<li><a href=\"huisarts_overzicht.php\">Huisartsen inzien</a></li>"; }
                                    if($_SESSION["rol"] == "Apotheker"){echo "<li><a href=\"patient_overzicht_apotheek.php\">Patiënten inzien</a></li>"; }
                                    if($_SESSION["rol"] == "Apotheker"){echo "<li><a href=\"voorraad_overzicht.php\">voorraaden inzien</a></li>"; }
                                    
                                    if($_SESSION["rol"] == "Bezorger"){echo "<li><a href=\"Leveringen.php\">Leveringen</a></li>"; }
                                    
                                    if($_SESSION["rol"] == "Admin"){echo "<li><a href=\"patient_overview_admin.php\">Patienten overzicht</a></li>"; }
                                    if($_SESSION["rol"] == "Admin"){echo "<li><a href=\"huisarts_overview.php\">Huisartsen overzicht</a></li>"; }
                                    if($_SESSION["rol"] == "Admin"){echo "<li><a href=\"bezorger_overview.php\">Berzorgers overzicht</a></li>"; }
                                    if($_SESSION["rol"] == "Admin"){echo "<li><a href=\"apotheek_overview.php\">Apotheken overzicht</a></li>"; }
                                }
                                ?>
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
      <div class="container">