<?php
	$db_link = mysqli_connect("localhost", "root", "", "my_daten_bank");
	
	if(!$db_link)
	{
		echo ("<p>Verbindun nicht hergestellt</p>");
	}
	
	
	function runSQL($sql)
	//$sql ist SQL-Anweisungen
	{
		global $db_link;
		$db_res = mysqli_query($db_link, $sql) // funktion
					or die("SQL-Abfrage: ".$sql."Fehler: ".mysqli_error($db_link));
					
		return $db_res;
	}
	
	
	
	
	



?>


<!--
 ***um zu testen, ob sql verbunden ist***
	if($db_link)
	{
		echo ("<p>Verbunden :-)</p>");
	}
	
	else
	{
		echo ("<p>Ein Fehler beim SQL-Connect Datenbank</p>");
	}
*** um die Seite abzurufen***
	http://localhost/connectsql.php
-->