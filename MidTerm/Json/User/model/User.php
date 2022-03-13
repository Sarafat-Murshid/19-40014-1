<?php
	function create($username, $password, $email){
		define("FILENAME", "user.json");
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
	}

?>