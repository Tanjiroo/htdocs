<!-- hier is the connection to sql -->
<?php

define('host', 'localhost');
define('username', 'root');
define('password', '');
define('db', 'webdatabase');


$con = mysqli_connect(host, username, password, db);

?>