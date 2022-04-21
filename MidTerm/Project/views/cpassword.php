<?php require_once "Navbar2.php" ?>
<?php
	session_start();
	$err= "";
	$username = $_SESSION['username'];

	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		if($_POST['password'] === $_POST['confirmpass']){
		$updateUser = [];
		$file_data = file_get_contents("Users.json");
        $file_data = json_decode($file_data, true);
            foreach ($file_data as $data) {
                if ($data['username'] === $username && $data['password'] === $_POST['oldpass']){
                	
                	$data = $updateUser = array_merge($data, $_POST['password']);
                	file_put_contents(__DIR__ . '/Users.json', json_encode($data, JSON_PRETTY_PRINT));
            	}
                else
				{
					$err = "*Fill Form Correctly";
				}

			}
		}
		else
		{
			$err = "*Passwords do not match";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate>
<h4>Change Password:</h4>
			<label for="oldpass">Old Password:</label>
			<input type="password" name="oldpass" id="op" maxlength="5">
			


			<br><br>
			<label for="pass">New Password:</label>
			<input type="password" id="pass" name="password">
			

			<br> <br>

			<label for="confimpass">Confrim Password:</label>
			<input type="password" id="confirmpass" name="confirmpass">
			 

			<br><br>
			<input type="submit" name="submit" value="Submit">
			<span class="error"><?php echo $err ?></span>
		</form>
</body>
</html>