 <?php 
 	include ("../model/dbconfig.php");
	session_start();
	$fname="";
    $err_fname="";
    $lname="";
    $err_lname="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $gender="";
	$err_gender="";
	$hasError = "";
	$Mchecked = "";
	$Fchecked = "";

	function insertUser($fname,$lname,$uname,$pass,$gender){
		$query = "insert into user values (NULL,'$fname','$lname','$uname','$pass','$gender')";
		return execute($query);
		}	
			
 	if(isset($_POST["signup"])){
 		

	function action($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$fname1 = action($_POST["fname"]);	
		$lname1 = action($_POST["lname"]);
		$uname1 = action($_POST["uname"]);
		$pass1 = action($_POST["pass"]);


		if(empty($fname1)){
		    $err_fname = "First Name Required";
			$hasError = true;
	    }
		else{
		    $fname = $fname1;
	    }
	    if(empty($lname1)){
		    $err_lname = "Last Name Required";
			$hasError = true;
	    }
		else{
		    $lname = $lname1;
	    }
		if(empty($uname1)){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $uname1;
	    }
		if(empty($pass1)){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		elseif($_POST["pass"] = $_POST["cpass"]){
		    $pass = $pass1;
	    }
		if(!isset($_POST["gender"])){
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
			if ($gender == "Male"){
				$Mchecked = "checked";
			}
			else if ($gender == "Female"){
				$Fchecked = "checked";
			}
		}
		if(!$hasError){
			$rs = insertUser($fname,$lname,$uname,$pass,$gender);
			if($rs === true){
				header("Location: Login.php");
			}
			$err_db = "Input Unique Values";
		}
	}
