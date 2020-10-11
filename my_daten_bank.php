<?php 
	require("templates/header.php"); 
	
?>
			<!------------------------------------------------------>
			
			<div id="content">
				<!--content ist der Name von div-->
				<h1>Freunde</h1>
				<p>Hier sind die Arschlöcher</p>
				
<?php
				require("templates/connectsql.php");
				$db_res = runSQL($sql)
				echo("<table>");
				while($row = mysqli_fetch_array($db_res))
				{
					echo("<tr>"); // für neue zweile
					echo ("<td>".$row["Vorname"]."</td>"); // td für neue palte
					echo ("<td>".$row["Nachname"] ."</td>");
					echo("</tr>");
				}
				echo("</table>");

?>
				
			</div>
			
			<!----------------------------------------------------->
			

			<!----------------------------------------------------->
			
		

			<!--content ist der Name von div-->
<?php require("templates/footer.php"); ?>