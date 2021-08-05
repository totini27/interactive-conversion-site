<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 2 [Conversion Rate]</title>
	<script src="conversion-rate.js"></script>
</head>
<body>


	<?php
	include 'file-io.php';


	$category = $unit = $rate = $error ="";
	$categoryErr = $unitErr = $rateErr = "";
	$message = "";
	$flag = false;

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$category = $_POST['category'];
		$unit = $_POST['unit'];
		$rate = $_POST['rate'];

		if(empty($category)) {
			$categoryErr = "Please enter a value";
			$flag = true;
		}
		if(empty($unit)) {
			$unitErr = "Please enter a value";
			$flag = true;
		}
		if(empty($rate)) {
			$rateErr = "Please enter a value";
			$flag = true;
		}
		
	}

	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="conversion-rate" onsubmit="isValid(); return false;">

		<fieldset>

			<h1>Page 2 [Conversion Rate]</h1>
			<h2>Conversion Site</h2>
			<br>
			<td>1</td> <a href="home.php">Home</a>
			<td>2</td> <a href="conversion-rate.php">Conversion Rate</a>
			<td>3</td> <a href="history.php">History</a>
			<br>
			<h2>Conversion Rate:</h2>
			<br>

			<label for="category">Category:</label>
			<input type="text" id="category" name="category">
			<span id="categoryErr" style="color: red"><?php echo $categoryErr; ?></span>

			<label for="unit">Unit:</label>
			<input type="number" id="unit" name="unit">
			<span id="unitErr" style="color: red"><?php echo $unitErr; ?></span>

			<label for="rate">Rate:</label>
			<input type="float" id="rate" name="rate">
			<span id="rateErr" style="color: red"><?php echo $rateErr; ?></span>

			<input type="submit" name="submit" value="Submit">

			<span id="message" style="color: green"><?php echo $message; ?></span>

		</fieldset>
		<br><br>
	</form>
	

</body>
</html>