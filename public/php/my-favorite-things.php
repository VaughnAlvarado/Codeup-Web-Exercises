<?php
function pageController() {
	$favoriteThings = [
	"Tacos",
	"Bacon",
	"Bacon-Wrapped Bacon",
	"Baked Potatoes",
	"Vehicles"
	];
	return [
	'favoriteThings' => $favoriteThings
	];
};
$data = pageController();
extract($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>List of Server-Names</title>
	 <link href="/css/servername.css" rel="stylesheet">
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
</head>
<body>
<div>
	<h1>List Of My Favorite Things</h1>
	<ol>
		<?php foreach($favoriteThings as $favorite => $favoritee): ?>
		<li><?= $favoritee; ?></li>
		<?php endforeach; ?>
	</ol>

	<table class="table table-striped"> 
		<thead>	
		</thead>
			<tbody>
				<?php foreach($favoriteThings as $favorite => $favoritee):  ?>
					<tr>
						<td><?= $favorite+1 ?></td>
						<td><?= $favoritee ?></td>
					</tr>
				<?php endforeach; ?>

			</tbody>
	</table>
</div>

</body>
</html>