<!-- hier is the connection to sql -->
<?php

define('host', 'localhost');
define('username', 'root');
define('password', 'Eu5qEzkGZ1iM2aWf');
define('db', 'tokens');


$connected = @new mysqli(host, username, password, db);


    if($connected-> connect_error){
        die('MySQL ERROR: '.$connected -> connect_error);
    }




?>