<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
	
		<title>Kontakt</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	
	<!----------------------------------------------------------------------------->
	
	<body>
	
		<div id= "wrapper">
			<header>
			</header>
			
			<!----------------------------------------------------->
			
			<nav>
				<ul>
					<li><a href="index.html" >Startseite </a></li>
					<!----- Wenn eine Datei den Namen index hat, wird sie automatisch geöffnet---->
					<li><a href="kontakt.html">Kontakt</a></li>
					<li><a href="#">Blog</a></li>
					
					
				</ul>
			</nav>
			
			<!----------------------------------------------------->
			
			<div id= "content">
				<h1>Auswertung</h1>
<?php 				

				echo "<p>".$_POST["userName"]."</p>";
				echo "<p>".$_POST["message"]."</p>";
				
				



?>				<!-- <p> für Paragraf-->
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
			
			<footer>
				<p><a href="#">Impressum</a></p>
				<!--p = Paragraph-->
			
			</footer>
			
			<!------------------------------------------------------>
			
		</div>

			
	<body>
	
</html>
	