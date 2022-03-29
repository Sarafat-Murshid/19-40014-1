 <?php 
 	include ("../model/dbconfig.php");
	session_start();
	$name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $gender="";
	$err_gender="";
	$hasError = "";
	$Mchecked = "";
	$Fchecked = "";

	
	function insertUser($name,$uname,$pass,$gender){
		$query = "insert into user values (NULL,'$name','$uname','$pass','$gender')";
		return execute($query);
		}	
 	if(isset($_POST["signup"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		elseif($_POST["pass"] = $_POST["cpass"]){
		    $pass = $_POST["pass"];
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
			$rs = insertUser($name,$uname,$pass,$gender);
			if($rs === true){
				header("Location: Login.php");
			}
			$err_db = "Input Unique Values";
		}
	}
