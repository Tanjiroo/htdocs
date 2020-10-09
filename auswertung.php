<?php require("templates/header.php"); ?>
			<!----------------------------------------------------->
			
		<div id= "content">
			<h1>Auswertung</h1>
				
<?php 				
				
				
			if(!empty($_GET["userName"]) && !empty($_GET["message"]))
			{
				//mail("tanjiro.kamado.ne@gmail.com", "Eine Nachricht vom Home-Page".$_POST["userName"], $_POST["message"]);
				echo "<p>Vielen Dank, ".$_GET["userName"]."! Deine Nachricht wurde gesendet!</p>";

		
			}	
			else
			{
				echo "<p>Bitte alle Felder ausfüllen</p>";
			}


?>				
			<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/N9mj1UB0VQI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			da ist ein Video
				man kann isset oder !empty benutzen
				! = nicht
				
			<p> für Paragraf-->
			<!--function rechne($a, $b)
			{
				$c = $a + $b;
				echo "<p>".$c."</p>";
			}
			rechne(2, 54);
			rechne(23, 56);-->


				
			<!----------------------------------------------------->
			
		</div>
			
			
		<!----------------------------------------------------->
<?php require("templates/footer.php"); ?>