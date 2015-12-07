<?php
require_once '../../config.php';
require_once '../../db_connect.php';
require_once '../../input.php';


$countAll = "SELECT * FROM national_parks";
$stmt = $dbc->query($countAll);
$count = $stmt->rowCount();
$limit = 4;
$maxPages = ceil($count / $limit);

$page = Input::has('page') ? Input::get('page'): 1;
$page = ($page < 0) ? 1 : $page;
$page = ($page > $maxPages) ? $page: 1;
$page = (is_numeric($page)) ? $page : 1;
// echo $maxPages;
$offset = ($page - 1) * 4;
$selectAll = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";
$stmt = $dbc->query($selectAll);
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
	$name = Input::get('name');
	$location = Input::get('location');
	$area = Input::get('area');
	$date = Input::get('date_established');

	$query = 'INSERT INTO national_parks (name,location, date_established, area_in_acres)
	VALUES (:name,:location,:date_established,:area )';
		
		$stmt = $dbc->prepare($query);
		$stmt->bindValue(':name',$name, PDO::PARAM_STR);
		$stmt->bindValue(':location',$location, PDO::PARAM_STR);
		$stmt->bindValue(':date_established',$date, PDO::PARAM_STR);
		$stmt->bindValue(':area',$area, PDO::PARAM_STR);

		$stmt->execute();
}

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
				Park Name<br>
				<input id="name" name="name" type="text">
			</p>
			<p>
				Location<br>
				<input id="location" name="location" type="text">
			</p>
			<p>
				Area In Acres<br>
				<input id="area" name="area" type="text">
			</p>
			<p>
				Date<br>
				<input id="date_established" name="date_established" type="text">
			</p>
			<p>
				<button type="Submit">Enter Park Info!</button>
			</p>
		</form>
		<table class ='col-md-12'>
			<tr>
				<th>Park Name</th>
				<th>Location</th>
				<th>Area in Acres</th>
				<th>Date Established</th>
			</tr>
			<?php
				foreach($parks as $park){  ?>
					<tr>
						<td class='border'><?= $park['name'] ?></td>
						<td class='border'><?= $park['location'] ?></td>
						<td class='border'><?= $park['area_in_acres'] ?></td>
						<td class='border'><?= $park['date_established'] ?></td>
					</tr>
				<?php } ?>
		</table>
		<?php if ($page > 1 ) { ?>
	 		<a class = 'btn-primary btn-lg' href="/php/national_parks.php?page=<?= $page - 1 ?>"> Previous Page</a>
	 	<?php } ?>
	 	<?php if ($page < 3) { ?>
			<a class = 'btn-primary btn-lg'href="/php/national_parks.php?page=<?= $page + 1 ?>"> Next Page</a>
		<?php } ?>
			<!-- <a class = 'btn-success btn-lg'href="/php/national_parks.php?page=<?= $limit  ?>">View All</a> -->
		 <footer class="footer">
	      <div class="container">
	      </div>
    	</footer>
	</div>

</body>
</html>