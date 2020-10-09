<?php 
	$handle = fopen("besucher.txt", "r");
	$besucherzahl = fgets($handle);

	fclose($handle);
	$besucherzahl++;
	
	$handle = fopen("besucher.txt", "w");
	fwrite($handle, $besucherzahl);
	fclose($handle);
?>



<!--Besucher Zähler-->
<!--while(!feof($handle))
	{
		$zeile = fget($handle)
	}-->
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
	
		<title>Givara Website</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	
	<!----------------------------------------------------------->
	
	<body>
		
		<div id= "wrapper">
			<header>
			</header>
			<!----------------------------------------------------->
			<nav>
				<ul>
					<li><a href="index.php" >Startseite </a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<li><a href="https://www.facebook.com/?ref=tn_tnmn">Facebook</a></li>
					
					
				</ul>
			</nav>
			