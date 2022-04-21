 <?php 
 	include ("../model/dbconfig.php");
	session_start();
	$name="";
    $err_name="";
    $username="";
    $err_username="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $url="";
	$err_url="";
	$hasError = "";

	function insertinventory($name,$username,$email,$phone,$url){
		$query = "insert into student values (NULL,'$name','$username','$email','$phone','$url')";
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

		if(empty(action($_POST["name"]))){
		    $err_name = "Name Required";
			$hasError = true;
	    }
		else{
		    $name = action($_POST["name"]);
	    }
	    if(empty(action($_POST["username"]))){
		    $err_username = "Username Required";
			$hasError = true;
	    }
		else{
		    $username =  action($_POST["username"]);
	    }
		if(empty(action($_POST["email"]))){
		    $err_email = "Email Required";
			$hasError = true;
	    }
	    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
	    	$err_email = "Valid Email Required";
			$hasError = true;
	    }
		else{
		    $email = action($_POST["email"]);
	    }
		if(empty(action($_POST["phone"]))){
		    $err_phone = "Phone Required";
			$hasError = true;
	    }
		else{
		    $phone = action($_POST["phone"]);
	    }
		if(empty(action($_POST["url"]))){
		    $err_url = "url Required";
			$hasError = true;
	    }
	    if(!filter_var($_POST["url"], FILTER_VALIDATE_URL)){
	    	$err_url = "Valid Link Required";
			$hasError = true;
	    }
		else{
		    $url = action($_POST["url"]);
	    }
		if(!$hasError){
			$rs = insertinventory($name,$username,$email,$phone,$url);
			if($rs === true){
				echo '<script>alert("Data Inserted")</script>';
				header("Location: student.php");
			}
			$err_db = "Input Unique Values";
		}
	}