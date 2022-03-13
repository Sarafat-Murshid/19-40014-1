<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Json</title>
</head>
<body>

	<h1>Json</h1>

	<?php
		define("FILENAME", "data.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		fclose($handle);

		$newId= $arr1 [count($arr1) - 1]->id + 1;
		$handle = fopen(FILENAME,"w");
		$data = array("id" => $newId, "username" => "admin", "password" => "admin");	

		if($arr1 === NULL){
			$json = array($data);
			$json = json_encode($json);
			fwrite($handle, $json);
		}

		else{
			$arr1[] = $data;
			$json = json_encode($arr1);
			fwrite($handle, $json);
		} 

	?>

</body>
</html>