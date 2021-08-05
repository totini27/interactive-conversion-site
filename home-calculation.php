<?php
include 'file-io.php';
if ($_GET['converter'] and $_GET['value']) {
		$converter =$_GET['converter'];
		$value =$_GET['value'];
	$fileData1 = read1();
			$data1= json_decode($fileData1);

			for ($i=0; $i <sizeof($data1) ; $i++) { 
				if($converter==$data1[$i]->category){
					$result = $value*$data1[$i]->rate;
					echo $result;
					$fileData = read();
					if(empty($fileData)) {
						$data[] = array("conversion" => $data1[$i]->category, "value" => $value, "result" => $result);
					}
					else {
						$data= json_decode($fileData);
						array_push($data, array("conversion" => $data1[$i]->category, "value" => $value, "result" => $result));
					}
					$data_encode = json_encode($data);
					write("");
					$res = write($data_encode);
				}
				

			}
		}
		
	 
?>