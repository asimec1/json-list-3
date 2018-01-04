<?php
	#tečajna lista HNB
	$url = 'http://api.hnb.hr/tecajn'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$hnb = json_decode($data); // decode the JSON feed
	print '
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title>HNB tečajna lista</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

	<div class="container">
	  <h2>HNB tečajna lista</h2>
	  <table class="table">
		<thead>
		  <tr>
			<th>Država</th>
			<th>Valuta</th>
			<th>Kupovni tečaj</th>
			<th>Srednji tečaj</th>
			<th>Prodajni tečaj</th>
			<th>Datum</th>
		  </tr>
		</thead>
		<tbody>';
		//select and display all cars
		foreach ($hnb as $valuta) {
			echo '
			<tr>
				<td>' . $valuta->drzava . '</td>
				<td>' . $valuta->valuta . '</td>
				<td>' . $valuta->kupovni_tecaj . '</td>
				<td>' . $valuta->srednji_tecaj . '</td>
				<td>' . $valuta->prodajni_tecaj . '</td>
				<td>' . $valuta->datum . '</td>
			</tr>';
		}
		print '
		</tbody>
	  </table>
	</div>

	</body>
	</html>';
?>