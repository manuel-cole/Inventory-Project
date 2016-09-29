<?php

define('DBHOST', 'localhost');
define('DBUSER', 'inventory');
define('DBPASS', 'inventory');
define('DBNAME', 'inventory');


$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);


if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
