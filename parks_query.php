<?php
require_once 'config.php';
require_once 'db_connect.php';

$stmt = $dbc->query('SELECT * FROM national_parks');

$results = $stmt->fetchAll(4);
print_r($results);