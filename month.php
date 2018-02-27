<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap-Work/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap-Work/css/styles.css">
</head>
<body>
	<?php 
		$year = date("Y");
		$feb;
		if ($year % 4 == 0) {
			$feb = 29;
		}
		else{
			$feb = 28;
		}
		
		$months = [
			"january" => 31,
			"february" => $feb,
			"march" => 31,
			"april" => 30,
			"may" => 31,
			"june" => 30,
			"july" => 31,
			"august" => 31,
			"september" => 30,
			"october" => 31,
			"november" => 30,
			"december" => 31
		];

		function option($monthsArray){
			foreach ($monthsArray as $month => $days) {
				$monthUpper = strtoupper($month);
				echo "<option value='$month'>$monthUpper</option>";
			}
		}

	 ?>

	 <div class="jumbotron">
	 	<div class="text-center">
	 	<table >
	 	<h1 class="text-info"><b>Select a month</b></h1>
	 		<tbody>
	 			<tr>
	 				<td>
	 					<form role="form" method="post" action="months.php">
	 						<div class="form-group">
	 							<div class="input-group">
	 								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	 								<select name="month_dropdown" class="form-control">
	 									<!-- php to insert options from months array -->
	 									<?php
	 										option($months);
	 									?>
	 								</select>
	 							</div>
	 						</div>
	 						<input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
	 					</form>
	 				</td>
	 			</tr>
	 		</tbody>
	 	</table>
	 	</div>


	 <?php
	 	if (isset($_POST['submit'])) {
	 		$monthSelected = $_POST['month_dropdown'];
	 		$days = $months[$monthSelected];

	 		if ($monthSelected !== "february") {
	 			echo "<div class='container'><h3>The month of $monthSelected has $days days</h3></div>";
	 		}

	 		else{
	 			if ($days == 29) {
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is a leap year</h3></div>";
	 			}

	 			else{
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is not a leap year</h3></div>";
	 			}
	 		}
	 		
	 	}
	 ?>

	 <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	 	 </div>
</body>
</html>
