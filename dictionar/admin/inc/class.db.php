<?php

//MySQL config
define('MYSQL_HOST',	'localhost');
define('MYSQL_DB',		'kmtelr_dictionar');
define('MYSQL_USER',	'kmtelr_dictionar');
define('MYSQL_PASS',	'crackthis');

//database setup
$host = MYSQL_HOST; 	 	//Database server LOCATION
$database = MYSQL_DB;    	//Database NAME
$username = MYSQL_USER;  	//Database USERNAME
$password = MYSQL_PASS;  	//Database PASSWORD
$connection;

//connect to database
$connection = mysql_connect($host, $username, $password) or die ('Unabale to connect to the database '.mysql_error());

//select db
mysql_select_db($database,$connection) or die ("Error in query: " . mysql_error());


//close db
function dbclose($connection){mysql_close($connection);}

?>