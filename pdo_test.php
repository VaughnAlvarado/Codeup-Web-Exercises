<?php 
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('USER', 'vaughn');
define('PASS', 'vaughn72');

require 'db_connect.php';

if ($dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) == true ){
	echo 'Logged in successfully';
} else {
	echo 'Log in failed, Try Again';
}
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";