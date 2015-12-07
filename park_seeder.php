<?php 



require 'park_migration.php';


$delete = 'TRUNCATE national_parks';
$dbc->exec($delete);

$tableInfo = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67'],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => '76518.98'],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => '35835.08'],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '337597.83'],
	['name' => 'Channel Islands', 'location' => 'California', 'date_established' => '1980-03-05', 'area_in_acres' => '249561.00'],
	['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '18322405'],
	['name' => 'Death Valley', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401.96'],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90'],
	['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => '1940-03-04', 'area_in_acres' => '461901.20']
];

foreach ($tableInfo as $info) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    VALUES (
    	'{$info['name']}', 
    	'{$info['location']}', 
    	'{$info['date_established']}', 
    	'{$info['area_in_acres']}'
    	)";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
};

