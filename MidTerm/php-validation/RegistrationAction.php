<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
</head>
<body>
<h1>Registration</h1>
	<?php

		$fname = "";
		$lname = "";
		$gender = "";
		$dob = ""	;	
		$religion = "";
		$praddress = "";
		$peaddress = "";
		$phone = "";
		$email = "";
		$url = "";		
		$uname = "";
		$password = "";
		$cpassword = "";


	    if ($_SERVER['REQUEST_METHOD'] === "POST") {
			function test($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		$fname = test($_POST['fname']);
		$lname = test($_POST['lname']);
		$gender = $_POST['gender'];
		$dob = test($_POST['dob']);
		$religion = test($_POST['religion']);
		$praddress = test($_POST['praddress']);
		$peaddress = test($_POST['peaddress']);
		$phone = test($_POST['phone']);
		$email = test($_POST['email']);
		$url = test($_POST['url']);
		$uname = test($_POST['uname']);
		$password = test($_POST['password']);
		$cpassword = test($_POST['cpassword']);
		

		$err_msg="";

		if (empty($fname)) {
			$err_msg .= "First Name Required<br>";
		}

		if (empty($lname)) {
			$err_msg .= "Last Name Required<br>";
		}

		if (!isset($gender)) {
			$err_msg .= "Gender Required<br>";
		}

		if (!isset($dob)) {
			$err_msg .= "Birth Date Required<br>";
		}

		if (!isset($religion)) {
			$err_msg .= "Religion Required<br>";
		}

		if (empty($praddress)) {
			$err_msg .= "Present Address Required<br>";
		}

		if (empty($peaddress)) {
			$err_msg .= "Permanent Address Required<br>";
		}

		if (empty($phone)) {
			$err_msg .= "Phone Number Required<br>";
		}

		if (empty($email)) {
			$err_msg .= "Email Required<br>";
		}

		if (empty($url)) {
			$err_msg .= "Website URL Required<br>";
		}

		if (empty($uname)) {
			$err_msg .= "User Name Required<br>";
		}

		if(strlen($uname)>5){
			$err_msg .= "User Name Can Be Maximum 5 letters<br>";
		}

		if (empty($password)) {
			$err_msg .= "Password Required<br>";
		}

		if (empty($cpassword)) {
			$err_msg .= "Password Confirmation Required<br>";
		}


		if ($password !== $cpassword) {
			$err_msg .= "Password Not Matched<br>";
		}

		if(empty($err_msg))
		{
				define("FILENAME", "data.json");
				$file1 = fopen(FILENAME, "r");
				$fr = fread($file1, filesize(FILENAME));
				$json = json_decode($fr);
				fclose($file1);

				$file2 = fopen(FILENAME, "w");
				$data = array("firstname" => $fname, "lastname" => $lname, "gender" => $gender, "dateofbirth" => $dob, "religion" => $religion, "presentaddress" => $praddress, "permanentaddress" => $peaddress, "phonenumber" => $phone, "email" => $email, "url" => $url, "username" => $uname, "password" => $password);

				if ($json === NULL) {
					$data = array($data);
					$data = json_encode($data);
					fwrite($file2, $data);
				}
				else {
					$json[] = $data; 
					$data = json_encode($json);
					fwrite($file2, $data);
				}
				fclose($file2);

				$data = json_decode($data);

				echo "Registration Successful";

		}

		else
		{
			echo $err_msg;
		}

		
		}	
	?>
</body>
</html>