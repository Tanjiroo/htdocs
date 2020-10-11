<?php

	session_start();
	function register($email, $name, $password)
	{
		global $db_link;
		$email = mysqli_real_escape_string($db_link, $email);
		$name = mysqli_real_escape_string($db_link, $name);
		$password = md5($password);
		//md5 macht das Passwort unaufällig in der Datenbank
		//
		
		// benutzer schon vorhand?
		// db_res befindet sich in connectsql
		$db_res = runSQL("select count(*) from login where email ='".$email."'");
		$row = mysqli_fetch_array($db_res);
		
		if($row['count(*)']>0)
		{
			return 'Es gibt schon einen Benutzer mit der eingegebenen E-Mail Adresse';
			
			
			
		}
		runSQL("insert into login(Email, Name, Passwort) values('".$email."', '".$name."', '".$password."')");
		return 'Der Benutzer wurde erfolgreich registriert.';
	}
	
	function login($email, $password)
	{
		global $db_link;
		$email = mysqli_real_escape_string($db_link, $email);
		
		$password = md5($password);
		$db_res = runSQL("select * from login where email = '".$email."' and password = '".$password."'");
		//db_res ist die Datenbank Anfrage
		if(mysqli_num_rows($db_res) == 0)
		{
			return'Ungültiger E-Mail oder ungültiges Passwort.';
		}
		
		$row = mysqli_fetch_array($db_res);
		$_SESSION['eingeloggt'] = 1;
		$_SESSION['name'] = $row['name'];
		return 'erfolgreich eingeloggt';
		
	}





?>