<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation (PHP)</title>
</head>
<body>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			
			function action($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$firstname = action($_POST["firstname"]);
		$lastname = action($_POST["lastname"]);
		$gender = action($_POST["gender"]);
		$dob = action($_POST["birthday"]);
		$religion = action($_POST["religion"]);
		$preaddress = action($_POST["address"]);
		$email = action($_POST["email"]);
		$username = action($_POST["username"]);
		$link=action($_POST["url"]);


		if (empty($firstname)) {
			
			echo "Fill up your first name <br>";
		}
		else{

			echo " First name: " .$firstname."<br>";
		}

		if (empty($lastname)) {
			
			echo "Fill up your last name <br>";
		}
		else{

			echo " Last name: " .$lastname."<br>";
		}

		if (empty($gender)) {
			
			echo "Fill up your gender <br>";
		}
		elseif ($gender==="male"||"female") {
			
			echo " Your gender: " .$gender."<br>";
		}

			if (empty($dob)) {
			
			echo "Fill up your date of birth <br>";
		}
		else{

			echo " Date of birth: " .$dob."<br>";
		}

			if (empty($religion)) {
			
			echo "Fill up your religion <br>";
		}
		else{

			echo " Religion: " .$religion."<br>";
		}

			if (empty($preaddress)) {
			
			echo "Fill up your present address <br>";
		}
		else{

			echo " Present address: " .$preaddress."<br>";
		}

			if (empty($email)) {
			
			echo "Fill up your email <br>";
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo"Invalid email format <br>";
		}
		else{
			echo " Your email :" .$email."<br>";
		}

					if (empty($link)) {
			
			echo "Fill up your personal website link <br>";
		}
		elseif(filter_var($link, FILTER_VALIDATE_URL))
		{
			echo"Invalid url <br>";
		}
	    
	    else{
			echo " Your personal website link :" .$link."<br>";
		}

		if(empty($_POST["password"])){

				echo " Password is empty <br>";
			}

			if(empty($_POST["confrimpass"])){
				echo" Confrim password field is empty <br>";

			} elseif (!empty($_POST["confrimpass"])) {
				if($_POST["password"] == $_POST["confrimpass"])
				{
					echo"Password match and Confrim<br>";
				} 
				else{
					echo"Does not match with password<br> ";
				}

			
			}
		
if (!empty($firstname) && !empty($email) && !empty($username) && !empty($gender) && !empty($dob) && !empty($_POST["confrimpass"]) && ($_POST["password"] == $_POST["confrimpass"])) {
        session_start();
        header("location:Login.php");
        if (file_exists('Users.json')) {
            $current_data = file_get_contents('Users.json');

            $array_data = json_decode($current_data, true);
            $new_data = array(
                'firstname'               =>     $_POST["firstname"],
                'lastname'         =>      $_POST["lastname"],
                'email'          =>     $_POST["email"],
                'username'     =>     $_POST["username"],
                'gender'     =>     $_POST["gender"],
                'password' =>     $_POST["password"],
                'dob'    =>     $_POST["birthday"]
            );
            $array_data[] = $new_data;
            $final_data = json_encode($array_data);

            if (file_put_contents('Users.json', $final_data)) {
                echo "Registretion complete and Information added Success fully";
            }
        } else {
            echo "JSON File not exits";
        }
    }

			
	}	
?>

</body>
</html>