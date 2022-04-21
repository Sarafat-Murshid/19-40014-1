 <?php 
 	include ("../model/dbconfig.php");
	session_start();
	$room_no="";
    $err_room_no="";
    $annex="";
    $err_annex="";
    $chair="";
    $err_chair="";
    $tables="";
    $err_tables="";
    $computer="";
	$err_computer="";
	$hasError = "";

	function insertinventory($room_no,$annex,$chair,$tables,$computer){
		$query = "insert into inventory values (NULL,'$room_no','$annex','$chair','$tables','$computer')";
		return execute($query);
		}	

 	if(isset($_POST["create"])){
 		

	function action($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if(empty(action($_POST["room_no"]))){
		    $err_room_no = "Room Number Required";
			$hasError = true;
	    }
		else{
		    $room_no = action($_POST["room_no"]);
	    }
	    if(empty(action($_POST["annex"]))){
		    $err_annex = "Annex Required";
			$hasError = true;
	    }
		else{
		    $annex =  action($_POST["annex"]);
	    }
		if(empty(action($_POST["chair"]))){
		    $err_chair = "Chair Required";
			$hasError = true;
	    }
		else{
		    $chair = action($_POST["chair"]);
	    }
		if(empty(action($_POST["tables"]))){
		    $err_tables = "Table Required";
			$hasError = true;
	    }
		else{
		    $tables = action($_POST["tables"]);
	    }
		if(empty(action($_POST["computer"]))){
		    $err_computer = "Computer Required";
			$hasError = true;
	    }
		else{
		    $computer = action($_POST["computer"]);
	    }
		if(!$hasError){
			$rs = insertinventory($room_no,$annex,$chair,$tables,$computer);
			if($rs === true){
				header("Location: accounts.php");
			}
			$err_db = "Input Unique Values";
		}
	}