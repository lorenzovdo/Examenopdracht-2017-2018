<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");


/*--------------------PATIËNT----------------------------------------------------------------*/
		if($_POST['Btn'] == 'patient'){
		      $query = "update `patient` set  `voornaam`      = '".$_POST['voornaam']."',
                                              `tussenvoegsel` = '".$_POST['tussenvoegsel']."',
                                              `achternaam`    = '".$_POST['achternaam']."',
                                              `wnplts`        = '".$_POST['woonplaats']."',
                                              `straat`        = '".$_POST['straat']."',
                                              `hsnr`          = '".$_POST['huisnummer']."',
                                              `postcode`      = '".$_POST['postcode']."',
                                              `tel`           = '".$_POST['telefoonnummer']."'
                                              where `id` = '".$_SESSION['id']."'";
            $result = mysqli_query($conn, $query);
            
            if($result){
                echo "De gegevens zijn succesvol gewijzigd";
                
                $_SESSION["voornaam"]        = $_POST["voornaam"];
                $_SESSION["tussenvoegsel"]   = $_POST["tussenvoegsel"];
			    $_SESSION["achternaam"]      = $_POST["achternaam"];
			    $_SESSION["woonplaats"]      = $_POST["woonplaats"];
			    $_SESSION["straat"]          = $_POST["straat"];
			    $_SESSION["huisnummer"]      = $_POST["huisnummer"];
			    $_SESSION["postcode"]        = $_POST["postcode"];
			    $_SESSION["telefoonnummer"]  = $_POST["telefoonnummer"];
                
                header("refresh:2; url=index.php");
            }
            else{
                echo "De gegevens zijn niet succesvol gewijzigd";
                
                header("refresh:2; url=index.php");
            }
     }



/*--------------------HUISARTS----------------------------------------------------------------*/
		elseif($_POST['Btn'] == 'huisarts'){
		      $query = "update `huisarts` set `tussenvoegsel` = '".$_POST['tussenvoegsel']."',
                                              `achternaam`    = '".$_POST['achternaam']."',
                                              `tel`           = '".$_POST['telefoonnummer']."'
                                              where `id` = '".$_SESSION['id']."'";
            $result = mysqli_query($conn, $query);
            
            if($result){
                echo "De gegevens zijn succesvol gewijzigd";
                
                $_SESSION["tussenvoegsel"]   = $_POST["tussenvoegsel"];
			    $_SESSION["achternaam"]      = $_POST["achternaam"];
			    $_SESSION["telefoonnummer"]  = $_POST["telefoonnummer"];
                
                header("refresh:2; url=index.php");
            }
            else{
                echo "De gegevens zijn niet succesvol gewijzigd";
                
                header("refresh:2; url=index.php");
            }
     }


/*--------------------APOTHEKER------------------------------------------------------------------*/
        elseif($_POST['Btn'] == 'apotheker'){
		      $query = "update `apotheek` set `naam`       = '".$_POST['naam']."',
                                              `woonplaats` = '".$_POST['woonplaats']."',
                                              `straat`     = '".$_POST['straat']."',
                                              `hsnr`       = '".$_POST['huisnummer']."',
                                              `postcode`   = '".$_POST['postcode']."',
                                              `tel`        = '".$_POST['telefoonnummer']."'
                                              where `id` = '".$_SESSION['id']."'";
            $result = mysqli_query($conn, $query);
            
            if($result){
                echo "De gegevens zijn succesvol gewijzigd";
                
                $_SESSION["naam"]            = $_POST["naam"];
			    $_SESSION["straat"]          = $_POST["straat"];
			    $_SESSION["huisnummer"]      = $_POST["huisnummer"];
			    $_SESSION["postcode"]        = $_POST["postcode"];
			    $_SESSION["telefoonnummer"]  = $_POST["telefoonnummer"];
                
                header("refresh:2; url=index.php");
            }
            else{
                echo "De gegevens zijn niet succesvol gewijzigd";
                
                header("refresh:2; url=index.php");
            }
     }

/*--------------------BEZORGER------------------------------------------------------------------*/
        elseif($_POST['Btn'] == 'bezorger'){
		      $query = "update `bezorger` set `voornaam`      = '".$_POST['voornaam']."',
                                              `tussenvoegsel` = '".$_POST['tussenvoegsel']."',
                                              `achternaam`    = '".$_POST['achternaam']."',
                                              `tel`           = '".$_POST['telefoonnummer']."'
                                              where `id` = '".$_SESSION['id']."'";
            $result = mysqli_query($conn, $query);
            
            if($result){
                echo "De gegevens zijn succesvol gewijzigd";
                
                $_SESSION["voornaam"]        = $_POST["voornaam"];
			    $_SESSION["tussenvoegsel"]   = $_POST["tussenvoegsel"];
			    $_SESSION["achternaam"]      = $_POST["achternaam"];
			    $_SESSION["telefoonnummer"]  = $_POST["telefoonnummer"];
                
                header("refresh:2; url=index.php");
            }
            else{
                echo "De gegevens zijn niet succesvol gewijzigd";
                
                header("refresh:2; url=index.php");
            }
     }
?>