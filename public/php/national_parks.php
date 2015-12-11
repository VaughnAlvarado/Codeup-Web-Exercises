<?php
require_once '../../config.php';
require_once '../../db_connect.php';
require_once '../../input.php';


$countAll = "SELECT count(*) FROM national_parks";
$stmt = $dbc->query($countAll);
$count = $stmt->fetchColumn();
$limit = 4;
$maxPages = ceil($count / $limit);

$page = Input::has('page') ? Input::get('page'): 1;
if ($page < 0 || 
	$page > $maxPages) {
	$page = 1;
} else {
	$page;
}
// echo $maxPages;
$offset = ($page - 1) * 4;
if (Input::has('all')) {
	$limit = $count;
	$offset = 0;
}
$selectAll = "SELECT * FROM national_parks LIMIT :limiter OFFSET :offset";
$stmt = $dbc->prepare($selectAll);
$stmt->bindValue(':limiter',$limit, PDO::PARAM_INT);
$stmt->bindValue(':offset',$offset, PDO::PARAM_INT);
$stmt->execute();

$stmt = $dbc->query($selectAll);
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
$errors = [];


if (!empty($_POST)) {
	try {
		$name = Input::getString('name');
	} catch (Exception $e) {
		$errors['name'] = $e->getMessage();
	}
	try {
		$location = Input::getString('location');
	} catch (Exception $e) {
		$errors['location'] = $e->getMessage();
	}
	try {
		$area = Input::getNumber('area');
	} catch (Exception $e) {
		$errors['area'] = $e->getMessage();
	}
	try {
		$dateTimeObject = Input::getDate('date_established');
	} catch (Exception $e) {
		$errors['date_established'] = $e->getMessage();
	}

	if (empty($errors)) {
		$formattedDate = $dateTimeObject->format('Y-m-d');
		$query = 'INSERT INTO national_parks (name,location, date_established, area_in_acres)
		VALUES (:name,:location,:date_established,:area )';
			
			$stmt = $dbc->prepare($query);
			$stmt->bindValue(':name',$name, PDO::PARAM_STR);
			$stmt->bindValue(':location',$location, PDO::PARAM_STR);
			$stmt->bindValue(':date_established',$formattedDate, PDO::PARAM_STR);
			$stmt->bindValue(':area',$area, PDO::PARAM_STR);

			$stmt->execute();
	}
}
$findError = 'errorFinder';




?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
   <link rel="stylesheet" href="/css/parks.css">

</head>
<body>
	<div class ='container'>
		<header>
			<div id="header">	
				<div class ="col-md-offset-1">
				</div>		
			</div>
		</header>
		<h2 class ='color-title'>National Parks</h2>
		<h3 class ='color-title'>Database Driven Web Application</h3>
		<form method="POST" action="/php/national_parks.php">
			<h3>Enter Park Info</h3>
			<p>
				<p class='parkForm'>Park Name<br></p>
				<input id="name" class='<?= !empty($errors['name'])? $findError : '' ?>' name="name" type="text" value='<?= isset($_POST['name']) && empty($errors['name'])? $_POST['name']: ''?>'>
			</p>
			<p>
				<p class='parkForm'>Location<br></p>
				<input id="location" class='<?= !empty($errors['location'])? $findError : '' ?>' name="location" type="text"value='<?= isset($_POST['location']) && empty($errors['location'])? $_POST['location']: ''?>'>
			</p>
			<p>
				<p class='parkForm'>Area In Acres<br></p>
				<input id="area" class='<?= !empty($errors['area'])? $findError : '' ?>' name="area" type="text" value='<?= isset($_POST['area']) && empty($errors['area'])? $_POST['area']: ''?>'>
			</p>
			<p>
				<p class='parkForm'>Date<br></p>
				<input id="date_established" class='<?= !empty($errors['date_established'])? $findError : '' ?>' name="date_established" type="text" value='<?= isset($_POST['date_established']) && empty($errors['date_established'])? $_POST['date_established']: ''?>'>
			</p>
			<p>
				<button type="Submit" class='park_info'>Enter Park Info!</button>
			</p>
		</form>
		<?php foreach ($errors as $error) : ?>
			<h4 class='errors'>An error has occurred, <?= $error; ?> </h4>
		<?php endforeach ?>
		<table class ='col-md-12'>
			<tr>
				<th>Park Name</th>
				<th>Location</th>
				<th>Area in Acres</th>
				<th>Date Established</th>
			</tr>
			<?php
				foreach($parks as $park) :  ?>
					<tr>
						<td class='border'><?= $park['name'] ?></td>
						<td class='border'><?= $park['location'] ?></td>
						<td class='border'><?= $park['area_in_acres'] ?></td>
						<td class='border'><?= $park['date_established'] ?></td>
					</tr>
				<?php endforeach ?>
		</table>
		<?php if ($page > 1 ) : ?>
	 		<a class = 'btn-primary btn-lg' href="/php/national_parks.php?page=<?= $page - 1 ?>"> Previous Page</a>
	 	<?php endif ?>
	 	<?php if ($page < $maxPages) : ?>
			<a class = 'btn-primary btn-lg'href="/php/national_parks.php?page=<?= $page + 1 ?>"> Next Page</a>
		<?php endif ?>
		<?php if (!Input::has('all')) : ?>
			<a class = 'btn-success btn-lg'href="/php/national_parks.php?all=true ">View All</a>
		<?php endif ?>
		 <footer class="footer">
	      <div class="container">
	      </div>
    	</footer>
	</div>

</body>
</html>