<!DOCTYPE html>

<html>
	<head>
		<title>Givara's WebSeite</title>
		<meta charset="utf-8">
		
		
		<link rel="stylesheet" href="css/style.css">
		<!-- rel ist ein referenzslink auf style.css datei -->
		
	</head>
	<body>
		<!--Hotline 1-->
		<h1 id="title_1">
			
				Meine WebSeite
		</h1>
		<header>
			<nav class="navibar">
				<!--Navigation Liste-->
				<ul class="navilist">
					<li>
						<a href="#index.php">
						Meine Studiumswebseite
						</a>
					</li>
					
					<li>
						<a href="#index.php">
						Kontakte
						</a>
					</li>
					
					<li>
						<a href="#info">
						<!---  # hash ist ein Referenz auf dieselbe Seite bzw.. daunten --->
						<!-- wenn man darauf klickt, kommt man auf section di="info"--->
						Über die Webseite
						</a>
					</li>
				</ul>
				
			</nav>
		</header>
		
		
		<main class="haupt">
		<!--Hauptseite-->

			<!------------------------------  Liste --------------------------------------------->
			<ul>
			<!-- <ol> oder <ul> ändert man die Nummer und die Punkten -->
				<li>
					<!--Liste-->
					<a href="http://algo.cs.uni-frankfurt.de/lehre/dismod/winter2021/dismod2021.php" >
					Dismod
					</a>
				</li>
				
				<li>
					<!--Liste-->
					<a href="https://www.math.uni-frankfurt.de/~acoghlan/linadi.pdf">
					
					Mathe 1
					</a>
				</li>
				
				<li>
					<!--Liste-->
					<a href="https://www.math.uni-frankfurt.de/~ismi/wakolbinger/teaching/StofI2021/">
					Stochastik
					</a>
				</li>
				<li>
					<!--Liste-->
					<a href="https://ae.cs.uni-frankfurt.de/algo220">
					Algo-2
					</a>
				</li>
				<li>
					<!--Liste-->
					<a href="https://olat-ce.server.uni-frankfurt.de/olat/auth/RepositoryEntry/9741467676?4">
					Programmierpraktikum
					</a>
				</li>
				<li>
					<!--Liste-->
					<a href="https://olat-ce.server.uni-frankfurt.de/olat/auth/RepositoryEntry/9811165201?7">
					Hauptgruppenchemie
					</a>
				</li>
				
			</ul>
				
			<div class="form">
				<input type="number" id="nummer_1" placeholder="Nummer 1">
				<input type="number" id="nummer_2" placeholder="Nummer 2">
				
				<p>
					eine Erklärung kann man hier schreiben
				</p>
				<p id="ausgabe_der_ergebnis">
					
				</p>
				<input type="submit" id="tut-btn">
			</div>
			</br>
			</br>
			<form action="" method="get">
				<input type="text" name="Name" placeholder="Please enter your name" > </br>
				<!--- value ist ein schon gegebene Parameter -->
				<input type="password" name="Passwort" placeholder="Please enter your password"> </br>
				<input type="submit">
				<!-- submit ist ein Knopf zum Senden -->
				
			</form>
			
			
			<!---------------------------- Tabelle ---------------------------------------->
			<h4 id="listen">
				Meine Liste
			</h4>
			<table>

				<thead>
					

					
					<tr class="zeilen">
						<!-- <tr> sind die Zeilen -->
						<th class="spalten">
							<!-- <th> sind die Spalten -->
							Name
						</th>
						
						<th>
							Link
						</th>
						
					</tr>
					<tr>
						<th>
							Farben-Liste
						</th>
						
						<th>
							<a href="https://www.rapidtables.com/web/css/css-color.html">
							Color
							</a>
						</th>
					</tr>	
					<tr>
						<th>
							Scriftarten-Liste 1
						</th>
						
						<th>
							<a href="https://www.w3.org/Style/Examples/007/fonts.en.html">
							Fonts 1
							</a>
						</th>
					</tr>	
					<tr>
						<th>
							Scriftarten-Liste 2
						</th>
						
						<th>
							<a href="https://www.tutorialbrain.com/css_tutorial/css_font_family_list/">
							Fonts 2
							</a>
						</th>
					</tr>
					<tr>
						<th>
							CSS Tutorial
						</th>
						
						<th>
							<a href="https://www.w3schools.com/css/default.asp">
							Tutorial
							</a>
						</th>
					</tr>
					<tr>
						<th>
							CSS color
						</th>
						
						<th>
							<a href="https://cssgradient.io/">
							Color Hex
							</a>
						</th>
					</tr>
					<tr>
						<th>
							JavaScript
						</th>
						
						<th>
							<a href="https://jquery.com/">
							JQuary
							</a>
						</th>
					</tr>
				</thead>
			</table>
			</br>
			</br>
			</br>
			</br>
			</br>
			<!-- leerzeilen "Umbruch" break -->
			
			<table>
				<thead>
					<tr>
						<th>
							Name
						</th>
						<th>
							Link
						</th>
					</tr>
					<tr>
						<th>
							Convert Pixel (X) to Centimeter
						</th>
						<th>
							<a href="https://www.unitconverters.net/typography/pixel-x-to-centimeter.htm">
							Link
							</a>
						</th>
					</tr>
				</thead>
			</table>
			
			
			<h4 id="hilfsmittle">
				Bilder
			</h4>
			<table>
				<thead>
					<tr>
						<th>
							Bild
						</th>
						<th>
							Link
						</th>
					</tr>
					<tr>
						<th>
							Margin Padding
						</th>
						<th>
							<a href="seite1.php">
							Link
							</a>
						</th>
					</tr>
				</thead>
			</table>
			
			<!---------------------------- paragraf ------------------------------->
			<h2>
				Mein Paragraph's Title oder Hotline
			</h2>
				
			
			<p class="text">
				Mein Paragraph </br>
				<!------- </br>  ist Zeilenumbruch -------->
				Mein Paragraph <br>
				Mein Paragraph <br>
				Mein Paragraph <br>
				Mein Paragraph <br>
				Mein Paragraph <br>
				Mein Paragraph <br>
			</p>
			<div>
				
				
			</div>
			<section class="sections" id="info" >
				<!--- id weißt eine section mit einem namen zu --->
			
			
				<!---- <section>  ist ein referenz. 
				dadurch dass man auf "Über die Webseite" klicht
				führt das Klicken herhier
				
				----------->
				<h3>
					Über die Webseite
				</h3>
				
				<p>
					<span class="spezial-text">Kurdistan</span>(kurdisch کوردستان Kurdistan; arabisch كردستان, DMG Kurdistān; persisch کردستان Kordestān; türkisch Kürdistan) <br>
					ist ein nicht genau begrenztes Gebiet in Vorderasien, das als historisches Siedlungsgebiet der Kurden betrachtet wird.  <br>
					Die Staaten, über die sich dieses Gebiet erstreckt, vermeiden zumeist die Bezeichnung Kurdistan oder verbieten den Gebrauch des Begriffes sogar. <br>
					Sein Gebrauch wird hingegen von breiten Schichten der kurdischen Bevölkerung gefördert bzw. gefordert.  <br>
					Das gesamte kurdische Siedlungsgebiet umfasst je nach Definition 440.000 bis 530.000 km2 und verteilt sich auf die Staaten  <br>
					Türkei,  <br>
					Irak,  <br>
					Iran  <br>
					und Syrien.  <br>
					In diesen Gebieten leben neben Kurden auch  <br>
					Araber,  <br>
					Perser,  <br>
					Aserbaidschaner, <br>
					Türken,  <br>
					Turkmenen,  <br>
					Armenier  <br>
					und Assyrer/Aramäer.
				</p>
			</section>
			

			
			

			
			
			<!------------------ Footer ----------------------------->
			

		
		
		</main>
		<footer>
			<hr>
				<a href="https://www.facebook.com/" >
				Facebook
				</a>
				<!-- href ist Hyperlink reference -->
			</hr>
		</footer>
		
		<script src="../js/java.js" type="text/javascript">
			
		</script>
		<!-- mit JvaScript verbinden  -->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
		</script>
		<!-- mit JQuary verbinden  -->
		
	
	
	
	
	
	
	</body>
	





</html>