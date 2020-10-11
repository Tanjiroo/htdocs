



<?php
	require('templates/connectsql.php');
	require('templates/loginsystem.php');
	require("templates/header.php");
	
?>
	<div id="content">
<?php
	
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['password']))
		{
			echo('<p>Bitte alle Felderausfüllen</p>');
		}
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL	)) 
		{
			echo('<p>Die angegebene E-Mail Adresse ist ungültig</p>');
		}
		else
		{
			$erg = register($_POST['email'], $_POST['name'], $_POST['password']);
			// register funktion befindet sich in loginsystem.php
			echo('<p>'.$erg.'</p>');
		}
	}
	else
	{
	





?>

	
		<h1>Registrieren</h1>
		<p>Hier kann man sich registrieren</p>
		<form action="registrieren.php" method="POST"> <!--kontakt formular-->
			<label>E-Mail Adresse: </label>
			<input type="text" name="email"/><br />
			<label>Name: </label>
			<input type="text" name="name"/><br />
			<label>Passwort: </label>
			<input type="password" name="password"/><br />
			<input type="submit" name="submit" value="registrieren" />
		</form>
		
<?php
	<d/iv>


?>
<?php
	}

	require("templates/footer.php");

?>

