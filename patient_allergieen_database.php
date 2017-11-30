<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");

///////////////////////////////wijziginsopdracht///////////////////////////////////////////////////////////////////////////

        $query = "delete from `allergieen` where `patient`='".$_POST['naam']."'";
        $result = mysqli_query($conn, $query);
            for($i = 0; $i< count($_POST['medicijn']); $i++){
            $query1 = "insert into `allergieen` (`id`,`patient`,`medicijn`) value (NULL, ".$_POST['naam'].", ".$_POST['medicijn'][$i].")";
            $result1 = mysqli_query($conn, $query1);
        }

        
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //printf($conn->error);

        if($result1){
            echo "Patient succesvol opgeslagen";
            header("refresh:2; url=index.php");
        }
        else{
            echo "Patient niet succesvol opgeslagen";
            header("refresh:2; url=index.php");
        }