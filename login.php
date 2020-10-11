<?php
	require("templates/connectsql.php");
	require('templates/loginsystem.php');

	require("templates/header.php");
	
	
?>
	<div id ="content">
<?php

		if(isset($_POST['login']))
		{
			if(empty($_POST['email']) || empty($_POST['password']))
			{
				echo('<p>Bitte alle Felder ausfühlen</p>');
			}
			//auswetung
			else
			{
				$erg = $login($_POST['email'], $_POST['password']);
				echo('<p>'.$erg.'</p>');
			}
		}
		else
		{
			
		}


?>



		<h1>login</h1>
		<p>Willkommen zum Login.<a href="registrieren.php">neu regestrieren</a></p>
		<form action="login.php" method="POST"> <!--kontakt formular-->
			<label>E-Mail Adresse: </label>
			<input type="text" name="email"/><br />
			<label>Passwort: </label>
			<input type="password" name="password"/><br />
			<input type="submit" name="submit" value="login"/>
		</form>
<?php

?>

	<d/iv>
<?php

	require("templates/footer.php");



?>