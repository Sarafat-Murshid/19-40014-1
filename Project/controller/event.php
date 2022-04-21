 <?php 
 	include ("../model/dbconfig.php");
	session_start();
	$event_name="";
    $err_ename="";
    $event_date="";
    $err_edate="";
	$hasError = "";

	function insertinventory($event_name,$event_date){
		$query = "insert into event values (NULL,'$event_name','$event_date')";
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

		if(empty(action($_POST["event_name"]))){
		    $err_ename = "Event Name Required";
			$hasError = true;
	    }
		else{
		    $event_name = action($_POST["event_name"]);
	    }
	    if(empty(action($_POST["event_date"]))){
		    $err_edate = "Event Date Required";
			$hasError = true;
	    }
		else{
		    $event_date =  action($_POST["event_date"]);
	    }
		if(!$hasError){
			$rs = insertinventory($event_name,$event_date);
			if($rs === true){
				echo '<script>alert("Data Inserted")</script>';
				header("Location: event.php");
			}
			$err_db = "Input Unique Values";
		}
	}