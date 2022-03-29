<?php require_once "../controller/regcn.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>

<body  style="background-color: LightYellow;">
	<form id="form1" name="form1" action="" method="post" novalidate>
		<fieldset>
			<legend>Registration form</legend>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
			<span class="error"> <?php echo $err_name ?></span>
            
			<br><br>

			<label for="uname">Username:</label>
			<input type="text" name="uname" id="uname" maxlength="5">
			<span class="error"> <?php echo $err_uname ?></span>

			<br><br>
			<label for="pass">Password:</label>
			<input type="password" id="pass" name="pass">
			<span class="error"> <?php echo $err_pass ?></span>

			<br> <br>

			<label for="cpass">Confrim Password:</label>
			<input type="password" id="cpass" name="cpass">
			<span class="error"> <?php echo $err_pass ?></span>

			<br><br>

			<label>Gender:</label>
			<input type="radio" id="male" <?php if($gender == "Male") echo "checked";?> name="gender" value="male"><label for="male">Male</label>
			<input type="radio" id="female" <?php if($gender == "Female") echo "checked";?> name="gender" value="female"><label for="female">Female</label>
			<span class="error"> <?php echo $err_gender ?></span>

			

			<br><br>
			<input type="submit" name="signup" value="Submit">
			<a href="Login.php"><input type="button" value="Login"></a>
		</fieldset>
		
	</form>

</body>

</html>