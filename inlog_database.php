<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");


/*--------------------PATIËNT----------------------------------------------------------------*/
		if($_POST['Btn'] == 'patient'){
		$query = "SELECT * FROM `patient` 
                  WHERE 
                  `vzknr` =  '".$_POST['vzknr']."' AND 
                  `email` =  '".$_POST['email']."' AND 
                  `geboortedatum` = '".$_POST['geboortedatum']."'";
				  	
		$result = mysqli_query($conn, $query);

        printf($conn->error);
            
		$record = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) > 0)
		{
			//var_dump($record);
            
			$_SESSION["id"]              = $record["id"];
			$_SESSION["vzknr"]           = $record["vzknr"];
			$_SESSION["voornaam"]        = $record["voornaam"];
			$_SESSION["tussenvoegsel"]   = $record["tussenvoegsel"];
			$_SESSION["achternaam"]      = $record["achternaam"];
			$_SESSION["geboortedatum"]   = $record["geboortedatum"];
			$_SESSION["woonplaats"]      = $record["wnplts"];
			$_SESSION["straat"]          = $record["straat"];
			$_SESSION["huisnummer"]      = $record["hsnr"];
			$_SESSION["postcode"]        = $record["postcode"];
			$_SESSION["telefoonnummer"]  = $record["tel"];
			$_SESSION["actief"]          = $record["actief"];
			$_SESSION["huisarts"]        = $record["huisarts"];
			$_SESSION["apotheek"]        = $record["apotheek"];
			$_SESSION["email"]           = $record["email"];
			$_SESSION["rol"]             = 'Patient';
			
            header("refresh:0;url=index.php");
		}
		else
		{
			echo"de door u ingegeven email of wachtwoord komt niet overeen met de database.";
			header("refresh:4;url=index.php");
		}
     }



/*--------------------HUISARTS----------------------------------------------------------------*/
		elseif($_POST['Btn'] == 'huisarts'){
		$query = "SELECT * FROM `huisarts` 
                  WHERE 
                  `email` =  '".$_POST['email']."' AND 
                  `wachtwoord` = '".MD5($_POST['wachtwoord'])."'";
				  	
		$result = mysqli_query($conn, $query);

		$record = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) > 0)
		{
			//var_dump($record);
			$_SESSION["id"]              = $record["id"];
			$_SESSION["tussenvoegsel"]   = $record["tussenvoegsel"];
			$_SESSION["achternaam"]      = $record["achternaam"];
			$_SESSION["telefoonnummer"]  = $record["tel"];
			$_SESSION["bignr"]           = $record["bignr"];
			$_SESSION["email"]           = $record["email"];
			$_SESSION["post"]            = $record["post"];
			$_SESSION["rol"]             = 'Huisarts';
			
            header("refresh:0; url=index.php");
		}
		else
		{
			echo"de door u ingegeven email of wachtwoord komt niet overeen met de database.";
			header("refresh:4;url=index.php");
		}
     }


/*--------------------APOTHEKER------------------------------------------------------------------*/
        elseif($_POST['Btn'] == 'apotheker'){
		$query = "SELECT * FROM `apotheek` 
                  WHERE 
                  `email` =  '".$_POST['email']."' AND 
                  `wachtwoord` = '".MD5($_POST['wachtwoord'])."'";
				  	
		$result = mysqli_query($conn, $query);

		$record = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) > 0)
		{
			//var_dump($record);
			$_SESSION["id"]              = $record["id"];
			$_SESSION["naam"]            = $record["naam"];
			$_SESSION["woonplaats"]      = $record["woonplaats"];
			$_SESSION["straat"]          = $record["straat"];
			$_SESSION["huisnummer"]      = $record["hsnr"];
			$_SESSION["postcode"]        = $record["postcode"];
			$_SESSION["telefoonnummer"]  = $record["tel"];
			$_SESSION["email"]           = $record["email"];
			$_SESSION["rol"]             = 'Apotheker';
			
            header("refresh:0; url=index.php");
		}
		else
		{
			echo"de door u ingegeven email of wachtwoord komt niet overeen met de database.";
			header("refresh:4;url=index.php");
		}
     }


/*--------------------BEZORGER------------------------------------------------------------------*/
        elseif($_POST['Btn'] == 'bezorger'){
		$query = "SELECT * FROM `bezorger` 
                  WHERE 
                  `email` =  '".$_POST['email']."' AND 
                  `wachtwoord` = '".MD5($_POST['wachtwoord'])."'";
				  	
		$result = mysqli_query($conn, $query);

		$record = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) > 0)
		{
			//var_dump($record);
			$_SESSION["id"]              = $record["id"];
			$_SESSION["voornaam"]        = $record["voornaam"];
			$_SESSION["tussenvoegsel"]   = $record["tussenvoegsel"];
			$_SESSION["achternaam"]      = $record["achternaam"];
			$_SESSION["telefoonnummer"]  = $record["tel"];
			$_SESSION["email"]           = $record["email"];
			$_SESSION["rol"]             = 'Bezorger';
			
            header("refresh:0; url=index.php");
		}
		else
		{
			echo"de door u ingegeven email of wachtwoord komt niet overeen met de database.";
			header("refresh:4;url=index.php");
		}
     }


/*--------------------ADMIN------------------------------------------------------------------*/
        elseif($_POST['Btn'] == 'admin'){
		$query = "SELECT * FROM `admin` 
                  WHERE 
                  `email` =  '".$_POST['email']."' AND 
                  `wachtwoord` = '".MD5($_POST['wachtwoord'])."'";
				  	
		$result = mysqli_query($conn, $query);

		$record = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) > 0)
		{
			//var_dump($record);
			$_SESSION["id"]              = $record["id"];
			$_SESSION["voornaam"]        = $record["voornaam"];
			$_SESSION["tussenvoegsel"]   = $record["tussenvoegsel"];
			$_SESSION["achternaam"]      = $record["achternaam"];
			$_SESSION["telefoonnummer"]  = $record["tel"];
			$_SESSION["email"]           = $record["email"];
			$_SESSION["rol"]             = 'Admin';
			
            header("refresh:0; url=index.php");
		}
		else
		{
			echo"de door u ingegeven email of wachtwoord komt niet overeen met de database.";
			header("refresh:4;url=index.php");
		}
     }
?>