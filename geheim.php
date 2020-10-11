
<?php

	session_start();
	require("templates/header.php");





?>

	<div id="content">
		<h1>Geheim</h1>
		<p>Diese Seite ist nur für eingeloggte Benuzter sichtbar</p>

<?php
	if(isset($_SESSION['eingeloogt']) && $_SESION['eingelogt'] == 1);
	{
		echo('<p>Du bist eigeloggt</p>');
	}

?>
		
		
		
	<d/iv>



<?php

	require("templates/footer.php");


?>