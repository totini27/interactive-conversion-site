<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 1 [Home]</title>
	<script src="home.js"></script>
</head>
<body>
	


	<?php
	include 'file-io.php';

	$value = $converter = $valueErr = $converterErr ="";


	$flag = false;

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$value = $_POST['value'];
		$converter = $_POST['converter'];


		 if($converter=="Choose One") {
                $converterErr = "Please select a conversion";
                $flag = true;
            }

		if(empty($value)) {
			$valueErr = "Please enter a value";
			$flag = true;
		}

	}


	?>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"  name="home" onsubmit="isValid(); return false;">

		<fieldset>
			<h1>Page 1 [Home]</h1>

			<h2>Conversion Site</h2>
			<br>
			<td>1</td> <a href="home.php">Home</a>
			<td>2</td> <a href="conversion-rate.php">Conversion Rate</a>
			<td>3</td> <a href="history.php">History</a>
			<br>
			<h2>Converter:</h2>
			<br>
				
			</select>
			<label for="converter">Converter: </label>
            <select id="converter" name="converter">
            	<option hidden>Choose One</option>
                <?php


				for ($i = 0;$i < sizeof($data1);$i++)
				{
					echo "<option>".$data1[$i]->category ."</option>";
				}
				?>
            </select>
            <span id="converterErr" style="color: red"><?php echo $converterErr; ?></span>
			<br><br>
			<label for="value">Value:</label>
			<input type="number" id="value" name="value">
			<span id="valueErr" style="color: red"><?php echo $valueErr; ?></span>

			<input type="submit" name="submit" value="Submit">

			<br><br>
			<label for="result">Result:</label>
			<input type="text" id="result" name="result">

		</fieldset>
		<br><br>

	</form>
	


</body>
</html>