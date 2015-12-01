<?php


require 'config.php';
require 'db_connect.php';

if ($dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) == true ){
	echo 'Logged in successfully';
};

$query = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($query);

$table = 'CREATE TABLE IF NOT EXISTS national_parks (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(50) NOT NULL,
		location VARCHAR(75) NOT NULL,
		date_established DATE NOT NULL,
		area_in_acres DOUBLE NOT NULL,
		PRIMARY KEY (id)
	)';
$dbc->exec($table);