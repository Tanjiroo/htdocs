<?php require("header_footer/header.php")?>


	<form class="testing_3" action="rechner.php" method="post">
		Number 1: <input type="number" name="num_1" value=0> <br>
		Number 2: <input type="number" name="num_2" value=0 ">
		<br>
		<input id="knopf" type="submit">
	
	
	</form>
	
	<br>
	
	Das Ergebnis ist
	<?php
	
		 echo $_GET["num_1"] + $_GET["num_2"]
	
	
	
	?>
	
	
<?php require("header_footer/footer.php")?>