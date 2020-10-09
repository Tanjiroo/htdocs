<?php require("templates/header.php"); ?>
		<!----------------------------------------------------->
			
			<div id= "content">
				<h1>Kontakt</h1>
				<p>
				Tel: 123456789
				</p>	
				<p>
				E-Mail: muster@mail.com
				</p>
				<p>
				Webseite: www.Givo.com
				</p>
				<p>Hier könnt ihr mit mir Kontakt aufnehmen</p>
					
				<!----------------------------------------------------->
				
				<form action="auswertung.php" method="GET">
					<!-- GET oder POSt -->
					<Label>Name:</name>
					<input name="userName" type="text" placeholder="Bitte Name eingeben"/><br />
					<!--<br /> ist für eine neue Zeike gedacht-->
						
					<textarea name="message"></textarea><br />
					<input name="messageSubmit" value="Nachricht schicken" type="submit"/>
				</form>
					
				<!----------------------------------------------------->
				
			</div>
				
				
			<!----------------------------------------------------->
			
<?php require("templates/footer.php"); ?>