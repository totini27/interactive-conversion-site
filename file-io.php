<?php
	
	if (!file_exists("data.json") ) {
		fopen("data.json", "w");
	}
	if (!file_exists("conversion-rate.json") ) {
		fopen("conversion-rate.json", "w");
	}

	define("filepath", "data.json");
	define("filepath1", "conversion-rate.json");

		$fileData1 = read1();
	$data1= json_decode($fileData1);

	function write($content) {
		$file = fopen(filepath, "w");
		$fw = fwrite($file, $content . "\n");
		fclose($file);
		return $fw;
	}

	function write1($content) {
		$file = fopen(filepath1, "w");
		$fw = fwrite($file, $content . "\n");
		fclose($file);
		return $fw;
	}

	function read() {
		$file = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($file, $fz);
		}
		fclose($file);
		return $fr;
	}

	function read1() {
		$file = fopen(filepath1, "r");
		$fz = filesize(filepath1);
		$fr = "";
		if($fz > 0) {
			$fr = fread($file, $fz);
		}
		fclose($file);
		return $fr;
	}
?>