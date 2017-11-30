<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");

        $query = "update `patient` set `actief` = ".$_POST['blocked']." where `id` = ".$_POST['patient']."";
        $result = mysqli_query($conn, $query);

        if($result){
            echo "Patient succesvol gewijzicht";
            //header("refresh:2; url=index.php");
        }
        else{
            echo "Patient niet succesvol gewijzicht";
            header("refresh:2; url=index.php");
        }