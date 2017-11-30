<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");

        //var_dump($wachtwoord);
            $query = "insert into `patient` (`id`, 
                                              `vzknr`,
                                              `voornaam`,
                                              `tussenvoegsel`,
                                              `achternaam`,
                                              `geboortedatum`,
                                              `wnplts`,
                                              `straat`,
                                              `hsnr`,
                                              `postcode`,
                                              `tel`,
                                              `actief`,
                                              `huisarts`,
                                              `apotheek`,
                                              `email`)
                                              VALUES
                                              ('NULL',
                                              '".$_POST['vzknr']."',
                                              '".$_POST['voornaam']."',
                                              '".$_POST['tussenvoegsel']."',
                                              '".$_POST['achternaam']."',
                                              '".$_POST['geboortedatum']."',
                                              '".$_POST['wnplts']."',
                                              '".$_POST['straat']."',
                                              ".$_POST['hsnr'].",
                                              '".$_POST['postcode']."',
                                              ".$_POST['telefoonnummer'].",
                                              0,
                                              ".$_SESSION['id'].",
                                              ".$_POST['apotheek'].",
                                              '".$_POST['email']."')";

        $result = mysqli_query($conn, $query);

///////////////////////////////wijziginsopdracht///////////////////////////////////////////////////////////////////////////
        $patientid = $conn->insert_id;
        echo $patientid;

        for($i = 0; $i< count($_POST['medicijn']); $i++){
            $query1 = "insert into `allergieen` (`id`,
                                                 `patient`,
                                                 `medicijn`)
                                                 value
                                                 (NULL,
                                                 ".$patientid.",
                                                 ".$_POST['medicijn'][$i].")";
            $result1 = mysqli_query($conn, $query1);
        }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //printf($conn->error);

        if($result){
            echo "Patient succesvol opgeslagen";
            header("refresh:2; url=index.php");
        }
        else{
            echo "Patient niet succesvol opgeslagen";
            header("refresh:2; url=index.php");
        }