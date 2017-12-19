<?php
	$servername = "localhost";
	$username   = "NAAM";
    	$password   = "WACHTWOORD";
	$dbname     = "DATABASENAAM";
    //$port   = 3306;
	/*
	switch($_SERVER["HTTP_HOST"])
	{
		case
	};
	
	var_dump($_SERVER);exit();
	$servername = "mysql.hostinger.nl";
	$username = "";    
	$password = "";
	$dbname = "";
	*/
	
	$conn = mysqli_connect($servername, $username, $password, $dbname); //, $port);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
?>
