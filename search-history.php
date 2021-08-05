<?php 
	include 'file-io.php';
	$category = empty($_GET['category'])?"":$_GET['category'];

		if (empty($category)) {
			$fileData = read();
			$data= json_decode($fileData);
	if(empty($data)){
		echo "No data found!";

	}
	else{

		echo "<ol>";

	for ($i=0; $i < sizeof($data); $i++) { 
		echo "<li>" . $data[$i]->conversion ." ". $data[$i]->value ." ". $data[$i]->result . "</li>";
	}
	echo"</ol>";
	}

	}

		
	

	else{
		$fileData = read();
			$data= json_decode($fileData);

		echo "<ol>";

	for ($i=0; $i < sizeof($data); $i++) { 
		if ( $data[$i]->conversion == $category)
		echo "<li>" . $data[$i]->conversion ." ". $data[$i]->value ." ". $data[$i]->result . "</li>";
	}
	echo"</ol>";
	}
 ?>