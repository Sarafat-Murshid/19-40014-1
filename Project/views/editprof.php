<?php require_once "Navbar2.php" ?>
<?php require_once "../controller/profile.php" ?>
<?php 
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

	function updateUser($fname,$lname,$uname,$gender){
		$query = "update user set fname='$fname', lname='$lname', username='$uname', gender='$gender' WHERE username='$uname'";
		return execute($query);
		}	
			
 	if(isset($_POST["update"])){
 		

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
			$rs = updateUser($fname,$lname,$uname,$gender);
			if($rs === true){
				header("Location: profile.php");
			}
			$err_db = "Input Unique Values";
		}
	}
?>
<?php
                $i=1;
                foreach($prof1 as $df){
                    $fname= $df["fname"];    
                   	$lname= $df["lname"];
                    $gender= $df["gender"];
                    $uname= $df["username"];
                        
                    $i++;
                }
            ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<style>
		.login-form {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 50px 40px;
			color: white;
			background: rgba(0, 0, 0, 0.4);
			border-radius: 10px;
			box-shadow: 0 0.4px 0.4px rgba(128, 128, 128, 0.109),
				0 1px 1px rgba(128, 128, 128, 0.155),
				0 2.1px 2.1px rgba(128, 128, 128, 0.195),
				0 4.4px 4.4px rgba(128, 128, 128, 0.241),
				0 12px 12px rgba(128, 128, 128, 0.35);
		}
		input[type="text"] {
			width: 10%;
			padding: 10px;
			margin: 5px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		input[type="submit"] {
			width: 10%;
			background-color: #4caf50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
	</style>
</head>
<body>
<form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate>
<h4>Edit Profile:</h4>
			<label for="name">FirstName:</label>
			<input class ="form-input-material" type="text" name="fname" id="fname" value="<?php echo $fname ?>">
			<span class="error"> <?php echo $err_fname ?></span>
            
			<br><br>

			<label for="name">LastName:</label>
			<input class ="form-input-material" type="text" name="lname" id="lname" value="<?php echo $lname ?>">
			<span class="error"> <?php echo $err_lname ?></span>
            
			<br><br>

			<label for="uname">Username:</label>
			<input class ="form-input-material" type="text" name="uname" id="uname" maxlength="5" value="<?php echo $uname ?>">
			<span class="error"> <?php echo $err_uname ?></span>
			 
			 <br><br>

			<label>Gender:</label>
			<input class ="form-input-material" type="radio" id="male" name="gender" value="male" <?php if($gender == "male") echo "checked";?>><label for="male">Male</label>
			<input class ="form-input-material" type="radio" id="female" name="gender" value="female" <?php if($gender == "female") echo "checked";?>><label for="female">Female</label>
			<span class="error"> <?php echo $err_gender ?></span>

			<br><br>
			<input type="submit" name="update" value="Update">
		</form>
</body>
</html>