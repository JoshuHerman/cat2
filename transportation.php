<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php
		$modesOfTransport = ["Automobile", "jet", "train", "ferry"];
		echo "<div class='container'><h4>Travel takes many forms, whether across the country, or around the earth. Here is a list of some common means of transportation:</h4>";
		echo "<ul>";
		foreach ($modesOfTransport as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "</ul></div>";

	?>

	<div class="container">
		<form role="form" method="post" action="transportation.php">
			<div class="form-group">
				<label for="add"> Add other forms of transport that you have knowledge of:(separated by commas)</label><br>
				<input type="text" name="additions" id="add" placeholder="transport 1, transport 2, transport 3....">
			</div>
			<input type="submit" name="submit">
		</form>
	</div>

	<?php
		if (isset($_POST['submit'])) {
			$additionsWithSpace = $_POST['additions'];
			$additionsWithoutSpace = str_replace(" ", "", $additionsWithSpace);
			print_r($additionsWithoutSpace);
		}
	?>
</body>
</html>