<?php
include 'file-io.php';
if ($_GET['category'] and $_GET['unit'] and $_GET['rate']) {
		$category =$_GET['category'];
		$unit =$_GET['unit'];
		$rate =$_GET['rate'];

			
			if(is_null($data1)) {
				$data1[] = array("category" => $category, "unit" => $unit, "rate" => $rate);
			}
			else {
				$data1= json_decode($fileData1);
				array_push($data1, array("category" => $category, "unit" => $unit, "rate" => $rate));
			}


			$data_encode = json_encode($data1);
			write1("");
			$res = write1($data_encode);
			if($res) {
				echo "Sucessfully saved.";
			}
			else {
				echo "Error! while saving.";
			}
		}
		
	 
?>