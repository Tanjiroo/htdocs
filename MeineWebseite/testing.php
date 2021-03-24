<?php require("header_footer/header.php")?>
	<form class="testing_2" action="testing.php" method="POST">
		Name: <input type="text" name="name" value=" ">
		<br>
		<input id="knopf" type="submit">
	
	
	</form>
	
	<br>
	
	Deine Name ist
	<?php
	
		 echo $_GET["name"]
	
	
	
	?>
	
	




<?php require("header_footer/footer.php")?>